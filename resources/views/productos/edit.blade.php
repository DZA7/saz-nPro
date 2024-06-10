@extends("layouts.app")
@section("titulo","Editar Producto")
@section("cabecera", "Editar Producto")

@section("content")
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm mx-auto">
            <div class="card shadow-2xl bg-white">
                <div class="card-body">
                    <form action="{{ route("productos.update", $producto->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        {{-- Nombre --}}
                        <div class="mb-4">
                            <label for="nombre" class="label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" class="input input-bordered w-full" placeholder="Nombre del producto" required />
                        </div>
                        {{-- Descripción --}}
                        <div class="mb-4">
                            <label for="descripcion" class="label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="textarea textarea-bordered w-full" placeholder="Descripción del producto">{{ $producto->descripcion }}</textarea>
                        </div>
                        {{-- Precio --}}
                        <div class="mb-4">
                            <label for="precio" class="label">Precio</label>
                            <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" class="input input-bordered w-full" placeholder="Precio del producto" required />
                        </div>
                        {{-- Stock --}}
                        <div class="mb-4">
                            <label for="stock" class="label">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{ $producto->stock }}" class="input input-bordered w-full" placeholder="Stock del producto" required />
                        </div>
                        {{-- Botón guardar --}}
                        <button type="submit" class="btn bg-purple-800 hover:bg-purple-700 text-white w-full">Actualizar producto</button>
                        <a href="{{ route("productos.index")}}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
