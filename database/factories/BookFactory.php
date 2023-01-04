<?php

namespace Database\Factories;

use App\Models\BookType;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_type_id'=> BookType::select('id')->get()->random()->id,
            'publisher_id'=> Publisher::select('id')->get()->random()->id,
            'title' => $this->faker->sentence,
            'no_pages' => random_int(10,500),
            'publishing_year'=> $this->faker->year
        ];
    }
}
