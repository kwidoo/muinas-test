<?php

namespace Database\Factories;

use App\Models\MuinasApplicationRound;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasApplicationRoundFactory extends Factory
{
    /**
     * 
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasApplicationRound::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person' => 319,
            'title' => implode(' ', $this->faker->words(5)),
            'description' => $this->faker->paragraph(3),
            'start_date' => now()->subMonth(1),
            'end_date' => now()->addYear(1),
            'budget' => $this->faker->randomFloat(2, 10000, 1000000),
            'created' => now(),
            'type' => 'current_round',
            'status' => 'waiting',
        ];
    }
}
