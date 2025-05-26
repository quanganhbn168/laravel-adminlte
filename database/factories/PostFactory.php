<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
use App\Models\PostCategory;
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
            'title' => fake()->sentence(5),
            'slug' => fn (array $attrs) => Str::slug($attrs['title']),
            'content' => fake()->paragraph(6),
            'post_category_id' => PostCategory::factory(),
            'image' => 'posts/default.jpg',
            'status' => true,
        ];
    }
}
