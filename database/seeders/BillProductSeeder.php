<?php

namespace Database\Seeders;

use App\Models\BillProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 5,
            'quantity' => 1,
        ]);
        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 7,
            'quantity' => 1,
        ]);
        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 26,
            'quantity' => 1,
        ]);
        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 23,
            'quantity' => 1,
        ]);



        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 38,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 33,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 41,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 37,
            'quantity' => 1,
        ]);




        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 42,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 43,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 47,
            'quantity' => 1,
        ]);

        BillProduct::create([
            'bill_id' => 1,
            'product_id' => 48,
            'quantity' => 1,
        ]);
    }
}
