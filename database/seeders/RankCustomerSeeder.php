<?php

namespace Database\Seeders;

use App\Models\RankCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RankCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RankCustomer::create([
            'point' => 100,
            'description' => 'Standard',
            'name' => 'Standard',
        ]);

        RankCustomer::create([
            'point' => 200, // Điểm của khách hàng
            'description' => 'Silver', // Mô tả
            'name' => 'Silver', // Tên
        ]);

        RankCustomer::create([
            'point' => 500,
            'description' => 'Gold',
            'name' => 'Gold',
        ]);
    }
}
