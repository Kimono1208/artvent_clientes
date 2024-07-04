<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\JuanchoController;


Route::middleware('guest')->group(function () {
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    Volt::route('login', 'pages.auth.login')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('welcome','cliente/welcome');
Route::view('about','cliente/acer');
Route::view('contact','cliente/cont');
Route::view('gallery','cliente/gald');
Route::view('team','cliente/equi');
Route::view('pricing','cliente/prec');
Route::view('features','cliente/cara');
// routes/web.php

use App\Http\Controllers\ProductosController;
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');
Route::resource('productos', ProductosController::class);
Route::resource('cotizacion', CotizacionController::class);
Route::resource('juancho', JuanchoController::class);
