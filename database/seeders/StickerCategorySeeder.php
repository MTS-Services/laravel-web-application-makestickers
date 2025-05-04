<?php

namespace Database\Seeders;

use App\Models\StickerCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StickerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StickerCategory::create([
            'name' => 'Custom Stickers',
            'slug' => 'custom-stickers',
            'description' => 'Individually cut stickers'
        ]);
        StickerCategory::create([
            'name' => 'Custom Labels',
            'slug' => 'custom-labels',
            'description' => 'Labels on a roll',
        ]);
        StickerCategory::create([
            'name' => 'POUCHES',
            'slug' => 'pouches',
            'description' => 'Stand-up zipper pouches',
        ]);
    }
}
