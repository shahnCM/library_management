<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Publication::factory(10)->create();
        \App\Models\Book::factory(20)->create();
        \App\Models\Genre::factory(8)->create();
        \App\Models\Author::factory(25)->create();
        \App\Models\BookCopy::factory(100)->create();
        \App\Models\LoanRequest::factory(10)->create();
        \App\Models\ReturnRequest::factory(10)->create();
        \App\Models\BookUser::factory(10)->create();
        \App\Models\AuthorBook::factory(10)->create();
        \App\Models\BookGenre::factory(10)->create();
    }
}
