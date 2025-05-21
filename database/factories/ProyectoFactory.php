<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true), // Esto ya genera palabras en español si configuras el locale
            'tiempo_construccion' => $this->faker->numberBetween(1, 36), // meses
            'descripcion' => $this->faker->sentence(),
            'imagen' => null,
        ];
    }
}
