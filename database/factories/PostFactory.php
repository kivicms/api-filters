<?php

namespace Database\Factories;

use App\Enums\PostStatus;
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
        $published = fake()->boolean();
        return [
            'title' => fake()->text(100),
            'content' => fake()->text(1000),
            'status' => $published ? PostStatus::Published : PostStatus::Draft,
            'published_at' => $published ? now() : null,
        ];
    }
}
