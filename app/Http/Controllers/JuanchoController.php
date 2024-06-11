<?php

namespace App\Http\Controllers;

use App\Models\Juancho;
use App\Http\Requests\StoreJuanchoRequest;
use App\Http\Requests\UpdateJuanchoRequest;

class JuanchoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreJuanchoRequest $request)
    {
        $cotizacion = new Juancho();
        $cotizacion->es_guadalajara = $request->es_guadalajara;
        $cotizacion->es_aire_libre = $request->es_aire_libre;
        $cotizacion->es_evento_grande = $request->es_evento_grande;
        $cotizacion->es_todo_el_dia = $request->es_todo_el_dia;
        $cotizacion->manana_o_noche = $request->manana_o_noche;
        $cotizacion->temporada = $request->temporada;
        // $cotizacion->estatus = 1;

        $cotizacion->save();
        return redirect('/about');
    }

    /**
     * Display the specified resource.
     */
    public function show(Juancho $juancho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juancho $juancho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJuanchoRequest $request, Juancho $juancho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juancho $juancho)
    {
        //
    }
}
