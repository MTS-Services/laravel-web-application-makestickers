<?php

namespace Database\Seeders;

use App\Models\LabelCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Label;

class LabelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LabelCategory::factory()->count(3)->create();
    }
}
