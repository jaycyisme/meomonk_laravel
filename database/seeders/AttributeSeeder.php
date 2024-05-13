<?php

namespace Database\Seeders;
use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::create([
            'name' => 'Color',
            'value' => 'Red',
        ]);

        Attribute::create([
            'name' => 'Weight',
            'value' => '1KG',
        ]);
    }
}
