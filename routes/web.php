<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $productos = [
        ["nombre" => "producto 1", "precio" => 100],
        ["nombre" => "producto 2", "precio" => 200],
        ["nombre" => "producto 3", "precio" => 100],
        ["nombre" => "producto 4", "precio" => 900],
        ["nombre" => "producto 5", "precio" => 700],
    ];
    return view("welcome", ["productos" => $productos]);
});

Route::get('/nueva-vista', function () {
    return view('nueva-vista');
});
