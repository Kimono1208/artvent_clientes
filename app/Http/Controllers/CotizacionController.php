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
        return view('/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/contact');
    }

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

        cotizacion::create($request->all());

        return redirect()->route('cotizacion.index')->with('success', 'Toldo creado exitosamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(cotizacion $cotizacion)
    {
        
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
