<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bill::create([
            'total_money' => 1200.00,
            'trading_code' => 'T123456',
            'create_time' => null,
            'user_id' => 1,
            'update_time' => null,
            'bill_status_id' => 1,
            'payment_method_id' => 1,
            'is_active' => true,
        ]);
    }
}
