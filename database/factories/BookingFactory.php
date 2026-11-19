<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\User;
use App\Models\Bike;

/**
 * @extends Factory<Model>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "bike_id" => Bike::factory(),
            "start_time" => now(),
            "end_time" => now()->addHours(1),
            "status" => "pending",
            "total_cost" => 0.00,
        ];
    }
}