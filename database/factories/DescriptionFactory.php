<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Description>
 */
class DescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'original_title' => fake()->name(),
            'author' => fake()->name(2),
            'background_info' => fake()->text(15),
            'literary_awards' => fake()->text(45),
            'series' => fake()->text(25),
            'setting' => fake()->text(10),
            'characters' => fake()->name(10),
        ];
    }
}
