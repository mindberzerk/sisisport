<?php

namespace Database\Factories;

use App\Models\Tournaments;
use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tournaments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tournament_id' => $this->faker->randomDigit,
            'job_title' => $this->faker->jobTitle,
            'pay_rate' => $this->faker->randomFloat(2, 10, 20),
            'active' => $this->faker->randomElement([true, false])
        ];
    }
}
