<?php

namespace Database\Seeders;
use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
            'percent' => 10,
            'type' => 'Discount',
            'start_time' => '2024-05-15',
            'end_time' => '2024-05-30',
            'description' => 'Summer Sale',
            'name' => 'Summer Sale 2024',
            'rank_customer_id' => 1,
        ]);
    }
}
