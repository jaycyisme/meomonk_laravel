<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'user_id' => 1,
            'product_id' => 1,
            'rate' => rand(1, 5), // Giả sử rate là ngẫu nhiên từ 1 đến 5
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);
    }
}
