<?php

namespace Database\Factories;

use App\Models\BookUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'book_copy_id' => rand(1, 100),
            'loan_request_id' => rand(1, 10),
            'return_request_id' => rand(1, 10),
            'status' => 'LOAN_REQUESTED'
        ];
    }
}
