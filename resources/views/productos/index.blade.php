@extends('layouts.app')

@section('titulo', 'Lista de productos')

@section('content')
<div class="container mx-auto my-8">
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="text-3xl font-bold mb-4">Lista de productos</h2>
    <div class="grid grid-cols-3 gap-4">
        @foreach($productos as $producto)
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col">
                <div class="h-40 mb-4 rounded-lg overflow-hidden">
                    <img src="http://source.unsplash.com/random/800x600/?technology&" alt="{{ $producto->nombre }}" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $producto->nombre }}</h3>
                <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($producto->descripcion, 50) }}</p>
                <p class="font-bold">Precio: ${{ $producto->precio }}</p>
                <p class="font-bold">Stock: {{ $producto->stock }}</p>
                <div class="mt-auto">
                    <a href="{{ route('productos.edit', $producto) }}" class="bg-blue-500 btn-xs hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-purple-800 btn-xs hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
