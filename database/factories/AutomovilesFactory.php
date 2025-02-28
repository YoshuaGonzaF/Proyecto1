<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutomovilesFactory extends Factory
{
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW']),
            'modelo' => $this->faker->word(),
            'anio' => $this->faker->numberBetween(1990, 2025),
            'color' => $this->faker->safeColorName(),
            'precio' => $this->faker->randomFloat(2, 5000, 50000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

