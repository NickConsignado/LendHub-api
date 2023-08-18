<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowing>
 */
class BorrowingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'borrowed_by' => fake()->words(2, true),
            'borrowed_date' => fake()->dateTimeThisYear(),
            'return_date' => fake()->dateTimeThisMonth(),
            'book_id' => Book::factory()
        ];
    }
}
