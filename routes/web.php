<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;

Route::view('/', 'welcome');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/app', function () {
    return view('app');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/bienvenida', [AuthController::class, 'bienvenida'])->name('bienvenida');






