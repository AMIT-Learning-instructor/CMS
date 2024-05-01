<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories_ids = \App\Models\Category::all('id')->pluck('id')->toArray();
        // var_dump($categories_ids);

        return [
            //
            'title'=> fake()->realText(10),
            'image'=> fake()->image('/Users/youssefabbas/Documents/Work/AMIT LEARINIG/Full Stack Development/laravel/CMS/public/images/blogs',fullPath:false),
            'content'=> fake()->realText(500),
            'category_id'=>fake()->numberBetween(min($categories_ids),max($categories_ids))
        ];
    }
}
