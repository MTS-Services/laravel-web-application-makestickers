<?php

namespace Database\Seeders;

use App\Models\SizeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SizeCategory::factory()->count(3)->create();
    }
}
