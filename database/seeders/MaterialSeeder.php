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
            'name' => 'Cotton',
            'description' => 'Cotton',
            'icons' => 'cotton',
            'price_modifier' => 120,
        ]);
        Material::create([
            'name' => 'Polyester',
            'description' => 'Polyester',
            'icons' => 'polyester',
            'price_modifier' => 125,  
        ]);

        Material::create([
            'name' => 'Silk',
            'description' => 'Silk',
            'icons' => 'silk',
            'price_modifier' => 130,
        ]);
    }
}
