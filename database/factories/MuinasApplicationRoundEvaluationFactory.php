<?php

namespace Database\Factories;

use App\Models\MuinasApplicationRoundEvaluation;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasApplicationRoundEvaluationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasApplicationRoundEvaluation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['yes_no', 'scale', 'scale'];
        $scales = [
            '{"score_0":""}',
            '{"score_0":"\u00dcldse ei vasta \/ puudub","score_1":"Valdavas osas ei vasta \/ n\u00f5rk","score_2":"Vastab v\u00e4hesel m\u00e4\u00e4ral \/ rahuldav","score_3":"\u00dcldiselt vastab \/ hea","score_4":"Vastab valdavas osas \/ v\u00e4ga hea","score_5":"Vastab t\u00e4ielikult \/ suurep\u00e4rane"}',  
        ];
        $scale_size = [null, 5];
        $what = $this->faker->numberBetween(0,1);
        return [
            'type' => $type[$what],
            'title' => implode(' ', $this->faker->words(5)),
            'description' => $this->faker->paragraph(3),
            'yes_field' => 'Vastab kriteeriumile',
            'no_field' => 'Ei vasta kriteeriumile',
            'nb_evaluators' => $this->faker->randomNumber(1),
            'scale_size' => $scale_size[$what],
            'scores' => $scales[$what],
            'serial_number' => 1,
            'created' => now(),
            'application_round' => 0,
            'preference_order' => null,
        ];
    }
}
