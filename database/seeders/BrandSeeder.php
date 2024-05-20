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
        Brand::create(['name' => 'Hills Science Diet', 'image' => 'royal-canin.jpg',]); #1 Food Brand
        Brand::create(['name' => 'Iams', 'image' => 'iams.jpg',]); #2 Food Brand
        Brand::create(['name' => 'Meow Mix', 'image' => 'Meomix.jpg',]); #3 Food Brand
        Brand::create(['name' => 'Rachael Ray Nutrish', 'image' => 'racheal-ray.jpg',]); #4 Food Brand
        Brand::create(['name' => 'Blue Buffalo', 'image' => 'instinct.jpg',]); #5 Food Brand
        Brand::create(['name' => 'PURINA Fancy Feast', 'image' => 'purina-one.jpg',]); #6 Food
        Brand::create(['name' => 'Wellness', 'image' => 'wellness.jpg',]); #7 Food Brand
        Brand::create(['name' => 'Royal Canin', 'image' => 'royal-canin.jpg',]); #8 Food Brand
        Brand::create(['name' => 'Instinct', 'image' => 'instinct.jpg',]); #9 Food Brand
        Brand::create(['name' => 'Merrick', 'image' => 'merric.jpg',]); #10 Food Brand
        Brand::create(['name' => 'Miu', 'image' => 'purina-one.jpg',]); #11 Food Brand
        Brand::create(['name' => 'BoBo', 'image' => 'wellness.jpg',]); #12 Toy Brand
        Brand::create(['name' => 'Keplin', 'image' => 'royal-canin.jpg',]); #13 Toy Brand
        Brand::create(['name' => 'Medisure Health Care', 'image' => 'instinct.jpg',]); #14 Pharmacy
        Brand::create(['name' => 'Hills Science', 'image' => 'Meomix.jpg',]); #15 Food Brand
        Brand::create(['name' => 'Doggy Man', 'image' => 'iams.jpg',]); #16 Toy Brand
    }
}
