<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Description;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::factory(1)
            ->create();

        Book::factory(4)
            ->hasBorrowings(2)
            ->create();

        Tag::factory(1)
            ->create();

        Description::factory(2)
            ->create();


        // Book::factory(3)
        // ->hasDescriptions(1)
        // ->create();

        // Borrowing::factory(1)
        //     ->hasBooks(1)
        //     ->create();
    }
}
