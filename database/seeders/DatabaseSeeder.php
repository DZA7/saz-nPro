<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Utilizar la fábrica para crear usuarios ficticios
        // User::factory(10)->create();

        // Crear un usuario específico con datos personalizados
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Utilizar la fábrica para crear productos ficticios
        \App\Models\Producto::factory(50)->create();
    }
}





