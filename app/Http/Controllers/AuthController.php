<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        return redirect()->route('bienvenida');
    }

    public function bienvenida()
    {
        return view('bienvenido');
    }

    public function productos()
    {
        $productos = [
            ["nombre" => "Cazuela frijoles", "precio" => 15],
            ["nombre" => "Sancocho", "precio" => 18],
            ["nombre" => "Mondongo", "precio" => 20],
            ["nombre" => "Sudado", "precio" => 18],
            ["nombre" => "Bandeja Paisa", "precio" => 25],
        ];
        return view('productos.index', ['productos' => $productos]);
    }
}




