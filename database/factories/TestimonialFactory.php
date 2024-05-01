<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        /*
            image
            name
            title
            rate
            comment
        */
        return [
            //
            'name'=>fake()->name(),
            'title'=>fake()->jobTitle(),
            'rate'=>fake()->numberBetween(1,5),
            'comment' =>fake()->realText(100),
            'image'=>fake()->image('/Users/youssefabbas/Documents/Work/AMIT LEARINIG/Full Stack Development/laravel/CMS/public/images/testimonials',fullPath:false)

        ];
    }
}
