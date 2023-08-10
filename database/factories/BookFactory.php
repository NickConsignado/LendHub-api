<?php

namespace Database\Factories;

use App\Models\Description;
use App\Models\Tag;
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
            'name' => fake()->words(2,true),
            'author' => fake()->name(),
            'stocks' => fake()->randomDigit(),
            'tag_id' => Tag::factory(),
            'description_id' => Description::factory()
        ];
    }
}
