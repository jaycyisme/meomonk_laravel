<?php

namespace Database\Seeders;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name' => 'Hills Science Diet']);
        Brand::create(['name' => 'Iams']);
        Brand::create(['name' => 'Meow Mix']);
        Brand::create(['name' => 'Rachael Ray Nutrish']);
        Brand::create(['name' => 'Blue Buffalo']);
        Brand::create(['name' => 'PURINA Fancy Feast']);
        Brand::create(['name' => 'Wellness']);
        Brand::create(['name' => 'Royal Canin']);
        Brand::create(['name' => 'Instinct']);
        Brand::create(['name' => 'Merrick']);
        Brand::create(['name' => 'Blue Divine Delights']);
        Brand::create(['name' => 'BoBo']);
    }
}
