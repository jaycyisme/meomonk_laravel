<?php

namespace Database\Seeders;

use App\Models\CouponStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CouponStatus::create(['name' => 'Available']);

        CouponStatus::create(['name' => 'Out of stock']);
    }
}
