<?php

namespace Database\Factories;

use App\Models\AuthorBook;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => rand(1, 10), 
            'book_id' => rand(1, 20),
            'role' => 'writer'
        ];
    }
}
