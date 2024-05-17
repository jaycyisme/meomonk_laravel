<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::create([
            'title' => 'Discount',
            'code' => 'meomonk',
            'discount' => '50',
            'coupon_status_id' => 1,
        ]);
    }
}
