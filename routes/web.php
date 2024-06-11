<?php

use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\JuanchoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('welcome','cliente/welcome');
Route::view('about','cliente/acer');
Route::view('contact','cliente/cont');
Route::view('gallery','cliente/gal');
Route::view('team','cliente/equi');
Route::view('pricing','cliente/prec');
Route::view('features','cliente/cara');
// routes/web.php
use App\Http\Controllers\ProductosController;

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');

Route::resource('cotizacion', CotizacionController::class);
Route::resource('juancho', JuanchoController::class);
