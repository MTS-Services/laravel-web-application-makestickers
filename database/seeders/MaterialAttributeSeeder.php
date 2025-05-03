<?php

namespace Database\Seeders;

use App\Models\MaterialAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialAttribute::create([
            'name' => 'Marble',

        ]);
        MaterialAttribute::create([
            'name' => 'Emulsion', 
        ]);

        MaterialAttribute::create([
            'name' => 'Rainbow',
        ]);
    }
}
