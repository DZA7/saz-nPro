@extends("layouts.app")

@section("content")
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold text-center mb-8">Nuestros Productos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($productos as $producto)
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <figure><img src="http://source.unsplash.com/random/800x600/?technology&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure>
                <h2 class="text-xl font-bold mb-2">{{ $producto->nombre }}</h2>
                <p>{{ Str::limit($producto->descripcion,50) }}</p>
                <p class="text-gray-700">Precio: ${{ $producto->precio }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
