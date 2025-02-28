<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'telefono' => $this->faker->phoneNumber,
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'sueldo' => $this->faker->randomFloat(2, 1000, 10000),
            'puesto' => $this->faker->jobTitle,
            'numero_seguro' => $this->faker->randomNumber(8, true),
            'correo_electronico' => $this->faker->email,
        ];
    }
}
