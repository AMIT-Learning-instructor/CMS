<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ///Users/youssefabbas/Documents/Work/AMIT LEARINIG/Full Stack Development/laravel/CMS/public/images/testimonials//a5b2e10b59c28ad6b350f4f44c893b17.png
        \App\Models\Testimonial::factory(10)->create();
    }
}
