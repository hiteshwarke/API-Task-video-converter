<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movies;

class MoviesFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_name' => $this->faker->name,
            'relise_date' => $this->faker->dateTimeThisMonth('+10 days'),
            'director_name' => $this->faker->name
        ];
    }
}
