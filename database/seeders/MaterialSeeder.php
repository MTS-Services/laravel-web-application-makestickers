<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'sort_order' => 1,
            'name' => 'Cotton',
            'description' => 'Cotton',
            'icons' => 'cotton',
            'price_modifier' => 120,
        ]);
        Material::create([
            'sort_order' => 2,
            'name' => 'Polyester',
            'description' => 'Polyester',
            'icons' => 'polyester',
            'price_modifier' => 125,  
        ]);

        Material::create([
            'sort_order' => 3,
            'name' => 'Silk',
            'description' => 'Silk',
            'icons' => 'silk',
            'price_modifier' => 130,
        ]);
    }
}
