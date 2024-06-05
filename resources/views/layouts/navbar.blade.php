@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-purple-800 mb-4">¡Bienvenido a sazónPro!</h1>
        <p class="text-lg text-gray-700 mb-6">Donde el sabor y la tradición se encuentran.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($productos as $producto)
                <div class="max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://via.placeholder.com/300" alt="Producto">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $producto['nombre'] }}</div>
                        <p class="text-gray-700 text-base">Precio: ${{ $producto['precio'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
