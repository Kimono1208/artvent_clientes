<?php

namespace App\Http\Controllers;

use App\Models\cotizacion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorecotizacionRequest;
use App\Http\Requests\UpdatecotizacionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener el ID del cliente actual
        $userId = Auth::id();
        

        // Obtener todas las cotizaciones del cliente actual
        $cotizaciones = Cotizacion::where('user_id', $userId)->get();

        // Retornar la vista con las cotizaciones
        return view('cliente.tables_cotizaciones', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('/contact');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            
            'ancho' => 'required|numeric',
            'largo' => 'required|numeric',
            'tipo' => 'required|string',
            'cantidad_personas' => 'required|numeric',
            'lugar' => 'required|string',
            'luces' => 'boolean',
            'conexiones' => 'boolean',
            'mesas' => 'integer',
            'sillas' => 'integer',
            'tarimas' => 'integer',
            'color' => 'nullable|string|max:255',
            'cortinas' => 'boolean',
            'decoracion_extra' => 'nullable|string',
            'status' => 'nullable|in:disponible,no_disponible'
        ]);

        $cotizacion = new Cotizacion($request->all());
        $cotizacion->user_id = Auth::id();  
        $cotizacion->user_id = Auth::id();
        $cotizacion->save();

        return redirect()->route('cotizacion.index')->with('success', 'Cotizacion creado exitosamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(cotizacion $cotizacion)
    {
        return redirect()->route('cotizacion.index')->with('success', 'Cotizacion creado exitosamente.');
    }
}
