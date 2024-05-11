<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = [
            'Taguig', 'Makati', 'Pasay', 'Quezon', 'Manila', 'Pasig', 'Perak', 
        ];
        return [
            'type' => fake()->randomElement(['Landed', 'Highrise']),
            'bedrooms' => fake()->numberBetween(1, 3),
            'bathrooms' => fake()->numberBetween(1, 5),
            'carparks' => fake()->numberBetween(1, 3),
            'area' => fake()->numberBetween(400, 2000),
            'address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'zip_code' => fake()->postcode(),
            'state' => fake()->randomElement($state),
            'country' => 'Philippines',
            'price' => fake()->numberBetween(50_000, 2_000_000)
        ];
    }
}
