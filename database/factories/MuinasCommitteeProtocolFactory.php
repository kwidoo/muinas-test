<?php

namespace Database\Factories;

use App\Models\MuinasCommitteeProtocol;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasCommitteeProtocolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasCommitteeProtocol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'committee_id' => null,
            'meeting_location' => 'Venue of the meeting',
            'meeting_start_date' => now()->subMonth(1),
            'meeting_end_date' => now()->subMonth(1),
            'meeting_start_time' => '9:00:00',
            'meeting_end_time' => '11:00:00',
            'number' => 'TN'.$this->faker->numberBetween(0,10),
            'ssv' => 'S',
            'state' => 'agenda',
            'signed_at' => now()->subMonth(1),
            'signature' => 'paper',
            'created' => now()->subMonth(1),
            'application_round_id' => null,
           // 'committee_name =>' => null,
        ];
    }
}
