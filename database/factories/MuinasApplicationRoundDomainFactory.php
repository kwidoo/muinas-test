<?php

namespace Database\Factories;

use App\Models\MuinasApplicationRoundDomain;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasApplicationRoundDomainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasApplicationRoundDomain::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domain' => implode(' ', $this->faker->words(5)),
            'created' => now(),
            'parent' => null,
            'application_round' => 0,
        ];
    }
}
