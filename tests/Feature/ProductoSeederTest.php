<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Producto;

class ProductoSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_productos_page_displays_products()
    {
        // Crear 10 productos utilizando el factory
        Producto::factory()->count(10)->create();

        // Hacer una solicitud a la página de productos
        $response = $this->get('/productos');

        // Verificar que la página se carga correctamente
        $response->assertStatus(200);

        // Verificar que al menos un producto se muestra en la página
        $response->assertSeeText(Producto::first()->nombre);
    }
}









