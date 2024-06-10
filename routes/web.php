<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;

Route::view('/', 'welcome');

//CRUD de productos
Route::resource('productos', ProductoController::class);
    
Route::get('/app', function () {
    return view('app');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/bienvenida', [AuthController::class, 'bienvenida'])->name('bienvenida');






