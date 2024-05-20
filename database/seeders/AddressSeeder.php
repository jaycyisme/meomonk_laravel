<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'user_id' => 2,
            'address_line_1' => 'Duy Tien - Ha Nam - Viet Nam',
            'address_line_2'=> null,
            'city' => 'Ha Nam',
            'zip_code' => '66668888',
        ]);
    }
}
