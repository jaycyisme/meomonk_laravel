<?php

namespace Database\Seeders;
use App\Models\ServiceStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceStatus::create(['name' => 'Active']);

        ServiceStatus::create(['name' => 'Inactive']);
    }
}
