<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'type' => $this->faker->randomElement(array('Adventure', 'Campaign')),
            'noPlayers' => $this->faker->numberBetween(1, 14),
            'currentRound' => $this->faker->numberBetween(1, 4),
            'resetDate' => 'Thursday',
        ];
    }
}