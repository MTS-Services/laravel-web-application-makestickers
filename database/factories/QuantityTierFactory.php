<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuantityTierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'min_quantity' => $this->faker->randomNumber(2),
            'max_quantity' => $this->faker->randomNumber(2),
            'price_multiplier' => $this->faker->randomNumber(2),
        ];
    }
}
