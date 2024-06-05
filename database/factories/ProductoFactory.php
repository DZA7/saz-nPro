<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->word(),
            "precio" => $this->faker->numberBetween(20000, 50000),
            "descripcion" => $this->faker->text(),
            "imagen" => 'https://via.placeholder.com/150',
        ];
    }
}


