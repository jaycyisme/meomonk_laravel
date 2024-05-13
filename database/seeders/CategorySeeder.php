<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Category 1',
            'icon_url' => 'biscuit.svg',
            'image_url' => 'biscuit.svg',
        ]);

        Category::create([
            'name' => 'Category 2',
            'icon_url' => 'biscuit.svg',
            'image_url' => 'biscuit.svg',
        ]);
    }
}
