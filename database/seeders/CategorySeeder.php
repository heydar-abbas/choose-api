<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Vegetable'
        ]);
        Category::factory()->create([
            'name' => 'Meat'
        ]);
        Category::factory()->create([
            'name' => 'Fast food'
        ]);
        Category::factory()->create([
            'name' => 'Hot drinks'
        ]);
        Category::factory()->create([
            'name' => 'Soft drinks'
        ]);
        Category::factory()->create([
            'name' => 'Juices'
        ]);
        Category::factory()->create([
            'name' => 'Ice cream'
        ]);
        Category::factory()->create([
            'name' => 'Seafood'
        ]);
        Category::factory()->create([
            'name' => 'Pastries'
        ]);
        Category::factory()->create([
            'name' => 'Sweets'
        ]);
        Category::factory()->create([
            'name' => 'chickens'
        ]);
    }
}
