<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StickerType>
 */
class StickerTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->unique()->slug(),
            'category_id' => fake()->numberBetween(1, 10),
            'description' => fake()->text(),
            'thumbnail' => fake()->imageUrl(),
            'status' => fake()->boolean(),
            'is_featured' => fake()->boolean(),
        ];
    }
}
