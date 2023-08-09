<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Book;
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
        Admin::factory(1)->create();

        Book::factory(5)
            // ->hasBatches(2)
            ->has(Tag::factory(1))
            ->create();

  
    Book::factory(5)
    ->has(Description::factory(1))
        ->create();

    }
}


    
