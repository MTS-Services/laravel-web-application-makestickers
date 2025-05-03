<?php

namespace Database\Seeders;

use App\Models\StickerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StickerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StickerType::factory()->count(10)->create();
    }
}
