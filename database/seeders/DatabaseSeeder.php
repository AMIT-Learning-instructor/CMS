<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\FAQ::factory(10)->create();
        \App\Models\Portfolio::factory(10)->create();
        \App\Models\Testimonial::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Blog::factory(10)->create();
        \App\Models\Team::factory(10)->create();
    }
}
