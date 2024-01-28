<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Category::factory()->create([
            'cat_title' => 'Первая категория',
            'cat_alias' => 'first-category'
        ]);
        \App\Models\Category::factory()->create([
            'cat_title' => 'Вторая категория',
            'cat_alias' => 'second-category'
        ]);
        \App\Models\Category::factory()->create([
            'cat_title' => 'Третья категория',
            'cat_alias' => 'threads-category'
        ]);

        \App\Models\Post::factory(20)->create();
    }
}
