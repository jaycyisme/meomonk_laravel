<?php

namespace Database\Seeders;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create(['name' => 'Adorable MSRT']);
        Supplier::create(['name' => 'Kaleidoscope SKPF']);
        Supplier::create(['name' => 'Animal Directional Global']);
    }
}
