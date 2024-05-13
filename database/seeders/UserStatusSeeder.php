<?php

namespace Database\Seeders;

use App\Models\UserStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo bản ghi cho trạng thái "Active"
        UserStatus::create(['name' => 'Active']);

        // Tạo bản ghi cho trạng thái "Inactive"
        UserStatus::create(['name' => 'Inactive']);
    }
}
