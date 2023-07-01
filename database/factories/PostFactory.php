<?php

namespace Database\Factories;

use App\Models\Post;

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
     * 
     */

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            //
            'name' => $this -> faker->name(),
            'description' => $this -> faker -> sentence(3),
            'image' => $this -> faker -> text,
        ];
    }
}
