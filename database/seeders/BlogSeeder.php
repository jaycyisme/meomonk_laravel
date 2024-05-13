<?php

namespace Database\Seeders;
use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Sample Blog Post',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'post_time' => '2024-05-13',
        ]);
    }
}
