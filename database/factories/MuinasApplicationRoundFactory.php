<?php

namespace Database\Factories;

use App\Models\MuinasApplicationRound;
use App\Models\MuinasApplicationRoundDomain;
use App\Models\MuinasApplicationRoundEvaluation;
use App\Models\MuinasApplicationRoundEvaluationDomain;
use App\Models\MuinasCommittee;
use App\Models\MuinasCommitteeMember;
use App\Models\MuinasCommitteeProtocol;
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
            'title' => 'Seeded '.implode(' ', $this->faker->words(5)),
            'description' => $this->faker->paragraph(3),
            'start_date' => now()->subMonth(1),
            'end_date' => now()->addYear(1),
            'budget' => $this->faker->randomFloat(2, 10000, 1000000),
            'created' => now(),
            'type' => 'current_round',
            'status' => 'waiting',
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (MuinasApplicationRound $ar) {
            for ($i=0;$i<3;$i++) {

                $ev = MuinasApplicationRoundEvaluation::factory()->create([
                    'application_round' => $ar->id,
                    'preference_order' => $i+1,
                    'serial_number' => $i+1,
                ]);

                $parent = null;
                if (rand(0,1) == 1) {
                    $parent = MuinasApplicationRoundDomain::whereNull('parent')->get()->random();
                }
                
                
                $dm = MuinasApplicationRoundDomain::factory()->create([
                    'application_round' => $ar->id,
                    'parent' => $parent ? $parent->id : null,
                ]);
                if ($parent) {
                    $evdm = MuinasApplicationRoundEvaluationDomain::factory()->create([
                        'application_round_domain' => $parent->id,
                        'application_round_evaluation' => $ev->id,
                    ]);
                }
                $cm = MuinasCommittee::factory()->create([
                    'application_domain' => $parent ? $parent->id : $dm->id
                ]);
            
                $cp = MuinasCommitteeProtocol::factory()->create([
                    'committee_id' => $cm->id,
                    'application_round_id' => $ar->id,
                ]);
                $mbs = MuinasCommitteeMember::factory()->count(8)->create([
                    'committee_id' => $cm->id,
                    'protocol_id' => $cp->id,
                ]);    
            }
        });
    }


}
