<?php

use App\Http\Controllers\GaleriaToldosController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
// Route::view('/galeria', 'cliente/gal');

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
