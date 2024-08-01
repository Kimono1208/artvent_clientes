<?php

use App\Http\Controllers\GaleriaToldosController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::view('/', 'welcome');
// Route::view('/galeria', 'cliente/gal');

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

Route::resource('galeria', GaleriaToldosController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::view('contac', 'contac')
    ->middleware(['auth'])
    ->name('contac');
require __DIR__.'/auth.php';
Route::view('welcome','cliente/welcome');
Route::view('about','cliente/acer');
Route::view('contact','cliente/cont');
Route::view('gallery','cliente/gald');
Route::view('team','cliente/equi');
Route::view('pricing','cliente/prec');
Route::view('features','cliente/cara');
// routes/web.php
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\JuanchoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PaymentController;
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');
Route::resource('productos', ProductosController::class);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('cotizacion', CotizacionController::class);
});
Route::get('/paypal/pay', [PaymentController::class, 'createOrder']);
Route::get('/paypal/success', [PaymentController::class, 'captureOrder']);
Route::get('/paypal/cancel', function() {
    return 'Pago cancelado';
Route::get('/cliente/tables_cotizaciones', [CotizacionController::class, 'index'])->name('cotizacion.index');
Route::get('/cliente/tables_cotizaciones/{id}', [CotizacionController::class, 'show'])->name('cotizacion.show');

});