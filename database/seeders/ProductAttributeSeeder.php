<?php

namespace Database\Seeders;
use App\Models\ProductAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductAttribute::create([
            'attribute_id' => 1,
            'product_id' => 1,
            'percent' => 10,
            'quantity' => 20,
        ]);
    }
}
