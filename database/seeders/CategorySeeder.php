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
            'name' => 'Cat',
            'icon_url' => 'cat.svg',
            'image_url' => 'cat.svg',
        ]);

        Category::create([
            'name' => 'Dog',
            'icon_url' => 'dog.svg',
            'image_url' => 'dog.svg',
        ]);

        Category::create([
            'name' => 'Cat Food',
            'icon_url' => 'cat-food.svg',
            'image_url' => 'cat-food.svg',
        ]);

        Category::create([
            'name' => 'Dog Food',
            'icon_url' => 'dog-food.svg',
            'image_url' => 'dog-food.svg',
        ]);

        Category::create([
            'name' => 'Toy',
            'icon_url' => 'toy.svg',
            'image_url' => 'biscuit.svg',
        ]);

        Category::create([
            'name' => 'Pharmacy',
            'icon_url' => 'pharmacy.svg',
            'image_url' => 'pharmacy.svg',
        ]);

        Category::create([
            'name' => 'Services',
            'icon_url' => 'service.svg',
            'image_url' => 'service.svg',
        ]);
    }
}
