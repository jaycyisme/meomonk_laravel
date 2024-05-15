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
        Brand::create(['name' => 'Hills Science Diet']); #1 Food Brand
        Brand::create(['name' => 'Iams']); #2 Food Brand
        Brand::create(['name' => 'Meow Mix']); #3 Food Brand
        Brand::create(['name' => 'Rachael Ray Nutrish']); #4 Food Brand
        Brand::create(['name' => 'Blue Buffalo']); #5 Food Brand
        Brand::create(['name' => 'PURINA Fancy Feast']); #6 Food
        Brand::create(['name' => 'Wellness']); #7 Food Brand
        Brand::create(['name' => 'Royal Canin']); #8 Food Brand
        Brand::create(['name' => 'Instinct']); #9 Food Brand
        Brand::create(['name' => 'Merrick']); #10 Food Brand
        Brand::create(['name' => 'Blue Divine Delights']); #11 Food Brand
        Brand::create(['name' => 'BoBo']); #12 Toy Brand
        Brand::create(['name' => 'Keplin']); #13 Toy Brand
        Brand::create(['name' => 'Medisure Health Care']); #14 Pharmacy
        Brand::create(['name' => 'Hills Science']); #15 Food Brand
        Brand::create(['name' => 'Doggy Man']); #16 Toy Brand
    }
}
