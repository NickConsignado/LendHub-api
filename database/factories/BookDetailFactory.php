<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book_Detail>
 */
class BookDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'literary_awards' => fake()->text(45),
            'setting' => fake()->text(10),
            'characters' => fake()->name(10),
            'pages' => fake()->numberBetween(300, 500),
            'published' => fake()->dateTimeThisYear(),
            'publisher' => fake()->words(3, true),
            'book_id' => Book::factory()
        ];
    }
}
