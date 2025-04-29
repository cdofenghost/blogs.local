<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'category_id' => random_int(1, 3),
            'author_id' => random_int(1, 10),
            'title' => fake()->name(),
            'content' => fake()->paragraph(10),
            'preview_image' => 'https://blogs.local/images/default-preview-image.jpg',
            'hidden' => fake()->boolean(),
        ];
    }
}
