<?php

namespace Database\Seeders;
use App\Models\BillStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BillStatus::create(['name' => 'Pending']);

        BillStatus::create(['name' => 'Paid']);

        BillStatus::create(['name' => 'Canceled']);
    }
}
