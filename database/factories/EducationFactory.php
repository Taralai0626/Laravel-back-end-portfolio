<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->word,
            'institution_name' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'date' => $this->faker->dateTimeThisDecade('+2 years'),
            'user_id' => User::all()->random(),
        ];
    }
}
