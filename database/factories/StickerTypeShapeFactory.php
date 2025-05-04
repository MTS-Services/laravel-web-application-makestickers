<?php

namespace Database\Factories;

use App\Models\StickerShape;
use App\Models\StickerType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StickerTypeShape>
 */
class StickerTypeShapeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sticker_type_id' => StickerType::inRandomOrder()->first()->id,
            'sticker_shape_id' => StickerShape::inRandomOrder()->first()->id,
        ];
    }
}
