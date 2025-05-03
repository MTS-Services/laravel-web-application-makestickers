<?php

namespace Database\Seeders;

use App\Models\StickerShapes;
use Illuminate\Database\Seeder;

class StickerShapesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         StickerShapes::factory()->count(10)->create();
    }
}
