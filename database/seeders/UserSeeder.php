<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JayCy',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'point' => 0,
            'phone_number' => '123456789',
            'rank_customer_id' => 1,
            'user_status_id' => 1,
            'is_active' => true,
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'YoungTee',
            'email' => 'user@example.com',
            'username' => 'user',
            'password' => Hash::make('user'),
            'point' => 0,
            'phone_number' => '123456789',
            'rank_customer_id' => 1,
            'user_status_id' => 1,
            'is_active' => true,
            'role_id' => 2,
        ]);
    }
}
