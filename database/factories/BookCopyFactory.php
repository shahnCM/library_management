<?php

namespace Database\Factories;

use App\Models\BookCopy;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCopyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookCopy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'added_by' => 1,
            'book_id' => rand(1, 20),
            'uuid' => $this->faker->unique()->numberBetween(1, 10000) . "#$%^&"
        ];
    }
}
