<?php

namespace Database\Factories;

use App\Models\MaterialCategory;
use App\Models\Product;
use App\Models\SizeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creater_id' => 1,
            'product_id' => Product::all()->random()->id,
            'material_category_id'=> MaterialCategory::all()->random()->id,
            'size_categorie_id' => SizeCategory::all()->random()->id,
            'quantity' => $this->faker->randomNumber(),
        ];
    }
}
