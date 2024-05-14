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
        Brand::create(['name' => 'Hills Science Diet']); #1
        Brand::create(['name' => 'Iams']); #2
        Brand::create(['name' => 'Meow Mix']); #3
        Brand::create(['name' => 'Rachael Ray Nutrish']); #4
        Brand::create(['name' => 'Blue Buffalo']); #5
        Brand::create(['name' => 'PURINA Fancy Feast']); #6
        Brand::create(['name' => 'Wellness']); #7
        Brand::create(['name' => 'Royal Canin']); #8
        Brand::create(['name' => 'Instinct']); #9
        Brand::create(['name' => 'Merrick']); #10
        Brand::create(['name' => 'Blue Divine Delights']); #11
        Brand::create(['name' => 'BoBo']); #12
        Brand::create(['name' => 'Keplin']); #13 Toy Brand
        Brand::create(['name' => 'Medisure Health Care']); #14 Pharmacy
    }
}
