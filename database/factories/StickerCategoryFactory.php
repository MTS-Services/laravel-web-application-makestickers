<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StickerCategoryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->unique()->slug(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
            'status' => fake()->boolean(),
        ];
    }
}
