<?php

namespace Database\Seeders;

use App\Models\QuantityTier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuantityTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuantityTier::factory()->count(10)->create();
    }
}
