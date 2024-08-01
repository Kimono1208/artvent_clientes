<?php

namespace App\Http\Controllers;

use App\Models\GaleriaToldos;
use Illuminate\Http\Request;

class GaleriaToldosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeriaToldos = GaleriaToldos::all();
        return view("cliente/gal", compact("galeriaToldos"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriaToldos $galeriaToldos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriaToldos $galeriaToldos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GaleriaToldos $galeriaToldos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriaToldos $galeriaToldos)
    {
        //
    }
}
