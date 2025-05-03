<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\MaterialAttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialAttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialAttributeValue::create([
            'material_id' => 1,
            'material_attribute_id' => 1,
            'value' => 'Marble',
        ]);
        MaterialAttributeValue::create([
            'material_id' => 2,
            'material_attribute_id' => 2,
            'value' => 'Ceramic',
        ]);
        MaterialAttributeValue::create([
            'material_id' => 3,
            'material_attribute_id' => 3,
            'value' => 'Wood',
        ]);
    }
}
