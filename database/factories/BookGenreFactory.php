<?php

namespace Database\Factories;

use App\Models\BookGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookGenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookGenre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => rand(1, 20),
            'genre_id' => rand(1, 8)
        ];
    }
}
