<?php

namespace Database\Seeders;

use App\Models\MaterialCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialCategory::create([
            'title' => 'Tissue',
            'slug' => 'tissue'
        ]);

        MaterialCategory::factory()->count(3)->create();
    }
}
