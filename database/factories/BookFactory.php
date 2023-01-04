<?php

namespace Database\Factories;

use App\Models\User;
use Nette\Utils\Random;
use App\Models\BookType;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'book_type_id'=> 1,
            'publisher_id'=> Publisher::select('id')->get()->random()->id,
            'title' => $this->faker->sentence,
            'no_pages' => random_int(10,100),
            'publishing_year'=> $this->faker->year()
        ];
    }
    public function configure()
    {

        return $this->afterMaking(function (User $user) {
            dump($user);
        })->afterCreating(function (User $user) {
            dump($user);
        });
    }
}
