<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Service 1',
            'service_type_id' => 1,
            'price' => 50.00,
            'description' => 'Description for Service 1',
            'image' => 'image1.png',
            'quantity' => 20,
            'service_status_id' => 1,
        ]);
    }
}
