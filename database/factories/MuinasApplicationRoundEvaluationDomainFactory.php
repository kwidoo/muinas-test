<?php

namespace Database\Factories;

use App\Models\MuinasApplicationRoundEvaluationDomain;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasApplicationRoundEvaluationDomainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasApplicationRoundEvaluationDomain::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application_round_domain' => 0,
            'application_round_evaluation' => 0,
            'domain_description' => implode(' ', $this->faker->words(5)),
        ];
    }
}
