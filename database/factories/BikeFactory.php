<?php

namespace Database\Factories;

use App\Models\Bike;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => fake()->unique()->bothify('SN-????-####'),
            'model' => fake()->randomElement(['Urbana', 'Carretera', 'Montaña', 'Electrica']),
            'price_per_hour' => fake()->randomFloat(2, 2, 25),
            'status' => fake()->randomElement(['available', 'maintenance', 'retired']),
        ];
    }
}
