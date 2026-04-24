<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Musik',
            'slug' => 'musik'
        ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop'
        ]);

        Event::create([
            'category_id' => 1,
            'title' => 'Jazz Night 2024',
            'description' => 'Event musik jazz',
            'date' => now(),
            'location' => 'Amikom',
            'price' => 150000,
            'stock' => 100,
        ]);

        Event::create([
            'category_id' => 2,
            'title' => 'AI Workshop',
            'description' => 'Belajar AI',
            'date' => now(),
            'location' => 'Lab Komputer',
            'price' => 50000,
            'stock' => 50,
        ]);
    }
}