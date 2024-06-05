@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center h-screen bg-gray-100">
    <h1 class="text-5xl font-bold text-gray-900 text-center mb-8">Bienvenido a sazónPro donde el sabor y la tradición se encuentran</h1>
    <h1 class="text-5xl font-bold text-gray-900 text-center mb-8">🍇🥒🧄🌶️🥑🥘🫕🥗🌽🥕🍠🥬🍍</h1>
    <a href="{{ route('productos.index') }}">
        <button class="bg-purple-800 text-white font-bold text-2xl rounded-lg p-4 hover:bg-purple-900">Menú</button>
    </a>
</div>
@endsection
