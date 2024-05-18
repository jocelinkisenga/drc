<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => fake()->randomElement(Category::pluck("id")),
            "title" => fake()->sentence(5, true),
            "description" => fake()->sentences(15, true),
            "slug" => fake()->sentences(3, true),
            "image" => fake()->imageUrl
        ];
    }
}
