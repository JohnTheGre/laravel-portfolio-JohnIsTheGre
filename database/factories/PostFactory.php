<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'slug' => $this->faker->paragraph,
            'body' => $this->faker->text($maxNbChars = 225),
        ];
    }
}
