<?php

namespace Database\Seeders;

use App\Models\StickerShape;
use Illuminate\Database\Seeder;

class StickerShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         StickerShape::factory()->count(10)->create();
    }
}
