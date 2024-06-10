@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 text-center">
        <h1 class="text-3xl font-bold text-purple-800 mb-4">Bienvenido a sazónPro</h1>
        <p class="text-lg text-gray-700 mb-6">Donde el sabor y la tradición se encuentran.</p>
        <a href="{{ route('productos.index') }}" class="btn bg-purple-800 hover:bg-purple-700 text-white px-4 py-2 rounded">epa</a>
    </div>
@endsection
