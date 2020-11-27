<?php

namespace Database\Factories;

use App\Models\MuinasCommitteeMember;
use App\Models\MuinasPerson;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasCommitteeMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasCommitteeMember::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $person = MuinasPerson::all()->random();
        $roles = ['manager', 'committee_member', 'recording_secretary', 'Komisjoni liige'];
        $grant_role = [null, 'county_adviser', 'assessor'];
        $county = [null, 'Harju maakond'];
        return [
            'person_id' => $person->id,
            'committee_id' => 0,
            'protocol_id' => null,
            'role_name' => $roles[$this->faker->numberBetween(0,3)],
            'name' => $this->faker->name,
            'job_title' => $this->faker->jobTitle,
            'email' => $this->faker->email,
            'grant_role_county' => $county[$this->faker->numberBetween(0,1)],
            'grant_role' => $grant_role[$this->faker->numberBetween(0,2)],
            'presence' => null,
        ];
    }
}
