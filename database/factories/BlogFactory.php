<?php

namespace Database\Factories;

use App\Models\Blog;
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
    public function definition()
    {
        $categoryIDs = Category::all()->pluck('id')->toArray();

        return [
            'title'         => fake()->words(3, true),
            'content'       => fake()->text(),
            'author_name'   => fake()->userName(),
            'category_id'   => fake()->randomElement($categoryIDs)
        ];
    }
}
