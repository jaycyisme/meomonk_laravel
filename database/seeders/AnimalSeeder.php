<?php

namespace Database\Seeders;
use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create(['name' => 'Animal 1']);

        Animal::create(['name' => 'Animal 2']);
    }
}
