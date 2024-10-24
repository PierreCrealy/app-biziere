<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'begin'             => fake()->dateTime(),
            'ending'            => fake()->dateTime(),
            'available'         => fake()->boolean(),
            'user_id'           => fake()->numberBetween(1,3)
        ];
    }
}
