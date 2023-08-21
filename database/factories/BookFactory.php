<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'author' => fake()->name(),
            'subtitle' => fake()->words(2, true),
            'stocks' => fake()->randomDigit(),
            'genre' => fake()->randomElement(['Romance', 'Drama', 'Comedy', 'adventure', 'horror']),
            'image_url' => fake()->imageUrl(640, 480),
        ];
    }
}
