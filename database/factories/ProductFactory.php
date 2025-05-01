<?php

namespace Database\Factories;

use App\Models\LabelCategory;
use App\Models\MaterialCategory;
use App\Models\SizeCategory;
use App\Models\StickerCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'material_category_id'=> MaterialCategory::all()->random()->id,
            'sticker_category_id' => StickerCategory::all()->random()->id,
            'label_category_id' => LabelCategory::all()->random()->id,
            'size_category_id' => SizeCategory::all()->random()->id,
            'description' => $this->faker->paragraph(),
            'unit_price' => $this->faker->randomFloat(2, 0, 100),
            'preview_image' => $this->faker->imageUrl(),
        ];
    }
}
