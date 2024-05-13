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
            'name' => 'Product 1',
            'category_id' => 1,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Description for Product 1',
            'image' => 'image1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 1,
            'supplier_id' => 1,
        ]);
    }
}
