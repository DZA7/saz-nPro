@extends("layouts.app")
@section("titulo", "Crear formulario")
@section("cabecera", "Crear Producto")

@section("content")
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div>
            <div class="card w-full max-w-sm shadow-2xl bg-white mx-auto">
                <div class="card-body">
                    <form action="{{ route("productos.store") }}" method="POST">
                        @csrf
                        {{-- Nombre --}}
                        <div class="mb-4">
                            <label for="nombre" class="label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="input input-bordered w-full" placeholder="Nombre del producto" required />
                        </div>
                        {{-- Descripción --}}
                        <div class="mb-4">
                            <label for="descripcion" class="label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="textarea textarea-bordered w-full" placeholder="Descripción del producto"></textarea>
                        </div>
                        {{-- Precio --}}
                        <div class="mb-4">
                            <label for="precio" class="label">Precio</label>
                            <input type="number" name="precio" id="precio" class="input input-bordered w-full" placeholder="Precio del producto" required />
                        </div>
                        {{-- Stock --}}
                        <div class="mb-4">
                            <label for="stock" class="label">Stock</label>
                            <input type="number" name="stock" id="stock" class="input input-bordered w-full" placeholder="Stock del producto" required />
                        </div>
                        {{-- Botón guardar --}}
                        <button type="submit" class="btn bg-purple-800 hover:bg-purple-700 text-white w-full">Crear producto</button>
                        <a href="{{ route("productos.index")}}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



