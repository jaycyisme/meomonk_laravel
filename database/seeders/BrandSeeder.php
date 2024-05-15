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
        Brand::create(['name' => 'Hills Science Diet', 'image' => 'image.png',]); #1 Food Brand
        Brand::create(['name' => 'Iams', 'image' => 'image.png',]); #2 Food Brand
        Brand::create(['name' => 'Meow Mix', 'image' => 'image.png',]); #3 Food Brand
        Brand::create(['name' => 'Rachael Ray Nutrish', 'image' => 'image.png',]); #4 Food Brand
        Brand::create(['name' => 'Blue Buffalo', 'image' => 'image.png',]); #5 Food Brand
        Brand::create(['name' => 'PURINA Fancy Feast', 'image' => 'image.png',]); #6 Food
        Brand::create(['name' => 'Wellness', 'image' => 'image.png',]); #7 Food Brand
        Brand::create(['name' => 'Royal Canin', 'image' => 'image.png',]); #8 Food Brand
        Brand::create(['name' => 'Instinct', 'image' => 'image.png',]); #9 Food Brand
        Brand::create(['name' => 'Merrick', 'image' => 'image.png',]); #10 Food Brand
        Brand::create(['name' => 'Blue Divine Delights',]); #11 Food Brand
        Brand::create(['name' => 'BoBo', 'image' => 'image.png',]); #12 Toy Brand
        Brand::create(['name' => 'Keplin', 'image' => 'image.png',]); #13 Toy Brand
        Brand::create(['name' => 'Medisure Health Care', 'image' => 'image.png',]); #14 Pharmacy
        Brand::create(['name' => 'Hills Science', 'image' => 'image.png',]); #15 Food Brand
        Brand::create(['name' => 'Doggy Man', 'image' => 'image.png',]); #16 Toy Brand
    }
}
