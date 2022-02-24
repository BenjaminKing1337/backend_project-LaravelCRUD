<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 25, $indexSize = 2),
            'description' => $this->faker->realTextBetween($minNbChars = 60, $maxNbChars = 100, $indexSize = 2),
            'releasedate' => $this->faker->dateTime(),
            'runtime' => $this->faker->numberBetween(40, 300),
            'rating' => $this->faker->randomDigitNot(0)
        ];
    }
}
