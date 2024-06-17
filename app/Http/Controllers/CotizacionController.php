<?php

namespace App\Http\Controllers;

use App\Models\cotizacion;
use Illuminate\Http\Request;
use App\Http\Requests\StorecotizacionRequest;
use App\Http\Requests\UpdatecotizacionRequest;
use Illuminate\Support\Facades\Redirect;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Lógica para guardar los datos del formulario
            // dd($request->all());
        $cotizacion = new cotizacion();
        $cotizacion->es_guadalajara = $request->es_guadalajara;
        $cotizacion->es_aire_libre = $request->es_aire_libre;
        $cotizacion->es_evento_grande = $request->es_evento_grande;
        $cotizacion->es_todo_el_dia = $request->es_todo_el_dia;
        $cotizacion->manana_o_noche = $request->manana_o_noche;
        $cotizacion->temporada = $request->temporada;
        // $cotizacion->estatus = 1;

        $cotizacion->save();

        // Redirige al usuario a la página de inicio con un mensaje de éxito
        return Redirect::route('home')->with('success', 'Tu cotización se ha enviado con éxito y está siendo procesada.');
    }
    /**
     * Display the specified resource.
     */
    public function show(cotizacion $cotizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cotizacion $cotizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecotizacionRequest $request, cotizacion $cotizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cotizacion $cotizacion)
    {
        //
    }
}
