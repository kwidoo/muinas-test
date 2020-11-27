<?php

namespace Database\Factories;

use App\Models\MuinasCommittee;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasCommitteeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasCommittee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'basis' => $this->faker->sentence(3),
            'numbering_symbol' => 'TN',
            'number' => 1,
            'new_index_start_of_year' => 1,
            'created' => now(),
            'start_of_numbering' => 1,
            'application_domain' => 0,
        ];
    }
}
