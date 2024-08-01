<?php

namespace App\Http\Controllers;

use App\Services\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Illuminate\Http\Request;
use App\Models\Cotizacion;
use App\Models\PaypalOrder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
// use App\Http\Controllers\Session;

class PaymentController extends Controller
{
    public function createOrder(Request $request)
    {
        $client = PayPalClient::client();

        $order = new OrdersCreateRequest();
        $order->prefer('return=representation');
        $order->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "amount" => [
                    "currency_code" => "MXN",
                    "value" => $request->input('amount') // Asegúrate de enviar el valor del monto en la solicitud
                ]
            ]],
            "application_context" => [
                "cancel_url" => url('/paypal/cancel'),
                "return_url" => url('/paypal/success')
            ]
        ];

        try {
            $response = $client->execute($order);

            
           
            Session::put('cotizacion_id', $request->input('cotizacion_id'));

            return redirect()->away($response->result->links[1]->href);
        } catch (\HttpException $ex) {
            return response()->json(['error' => $ex->getMessage()]);
        }
    }

    public function captureOrder(Request $request)
    {
        $client = PayPalClient::client();
        $orderId = $request->query('token');

        $orderCapture = new OrdersCaptureRequest($orderId);
        $orderCapture->prefer('return=representation');

        try {
            $response = $client->execute($orderCapture);
            if ($response->result->status === 'COMPLETED') {
                // Guardar la orden de PayPal en la base de datos
                DB::transaction(function () use ($response, $request) {
                    $userId = Auth::user()->id; // Asumiendo que el cliente_id se almacena en la sesión
                    // $cotizacionId= $request->input('cotizacion_id');
                    $cotizacionId=Session::get('cotizacion_id', $request->input('cotizacion_id'));
                    // $request->input('cotizacion_id');
                    // dd($cotizacionId);
                    // dd($request->input('cotizacion_id'));
                    PaypalOrder::create([
                        'user_id' => $userId,
                        'cotizacion_id' => $cotizacionId,
                        'pago' => $response->result->id,
                    ]);
                });

                return redirect('/dashboard')->with('status', 'Gracias! El pago a través de PayPal se ha realizado correctamente.');
            }
        } catch (\HttpException $ex) {
            return redirect('/paypal/failed')->with('status', 'Lo sentimos! El pago a través de PayPal no se pudo realizar.');
        }
    }
}
