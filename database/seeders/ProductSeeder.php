<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'cat-blue-buffalo-72',
            'category_id' => 1,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Description for Product 1',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        Product::create([
            'name' => 'dog-blue-buffallo-basic-skin-stomatch',
            'category_id' => 2,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Description for Product 1',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        Product::create([
            'name' => '1',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Description for Product 1',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        Product::create([
            'name' => 'dog-rope-toy',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Description for Product 1',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 13,
            'supplier_id' => 2,
        ]);

    }
}
