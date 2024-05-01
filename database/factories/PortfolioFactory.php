<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'image' => fake()->image('/Users/youssefabbas/Documents/Work/AMIT LEARINIG/Full Stack Development/laravel/CMS/public/images/portfolio',fullPath:false),
            'simple_description' => fake()->realText(200)
        ];
    }
}
