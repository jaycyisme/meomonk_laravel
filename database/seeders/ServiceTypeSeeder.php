<?php

namespace Database\Seeders;
use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceType::create(['name' => 'ServiceType 1']);

        ServiceType::create(['name' => 'ServiceType 2']);
    }
}
