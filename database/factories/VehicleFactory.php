<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicles_automaker_id' => random_int(1, 45),
            'vehicles_categories_id' => random_int(1, 21),
            'title' => fake()->word(),
            'year_manufacture' => random_int(1980, 2024),
            'year_model' => random_int(1980, 2024),
            'description' => fake()->text(200),
            'status' => random_int(0,1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
