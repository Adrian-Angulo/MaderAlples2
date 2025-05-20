<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'categoria' => $this->faker->randomElement(['Silla', 'Mesa', 'Armario', 'Cama', 'Estante']),
            'precio' => $this->faker->randomFloat(2, 50000, 500000),
            'imagen' => $this->faker->imageUrl(640, 480, 'furniture', false), // Imagen real de internet, sin texto
            'descripcion' => $this->faker->sentence(10, true), // Frase en español
        ];
    }
}
