<?php

namespace App\Http\Controllers;

use App\Models\galeria_toldos;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    // Función para listar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', ['productos' => $productos]);
    }

    // Función para mostrar el detalle de un producto
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->load('galeria_toldos');
        galeria_toldos::findOrFail(($id));

        return view('productos.show', ['producto' => $producto]);
    }
}


