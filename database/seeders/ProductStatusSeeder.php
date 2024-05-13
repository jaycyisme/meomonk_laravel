<?php

namespace Database\Seeders;
use App\Models\ProductStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStatus::create(['name' => 'Available']);

        ProductStatus::create(['name' => 'Out of Stock']);
    }
}
