<?php

namespace Database\Factories;

use App\Models\MuinasGrantApplication;
use App\Models\MuinasGrantapplicationmonument;
use App\Models\MuinasGrantapplicationmonumentowner;
use App\Models\MuinasGrantapplicationmuinasobject;
use App\Models\MuinasMonumentowner;
use App\Models\MuinasMuinasobject;
use App\Models\MuinasMuinasobjectaddress;
use App\Models\MuinasOwnerperson;
use App\Models\MuinasPerson;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuinasGrantApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MuinasGrantApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $amount = $this->faker->numberBetween(10000, 30000);
        $person = MuinasPerson::all()->random();
        $mmo = MuinasMuinasobject::where('type', 'monument')->get()->random();        
        $mma = MuinasMuinasobjectaddress::where('muinasobject', $mmo->id)->first();        
		$mom = $mmo->muinas_muinasobjectmonuments->first();     
        $owner = MuinasMonumentowner::where('monument', $mom->monument)->first()->muinas_ownerperson;

        return [
		'name' => $owner->name,
		'phone' => $owner->phone,
		'email' => $owner->email,
		'code' => $owner->code,
		'address' => $mma->address,
		'contact_person_name' => $person->realname,
		'contact_person_phone' => $this->faker->phoneNumber,
		'contact_person_fax' => $this->faker->phoneNumber,
		'contact_person_email' => $this->faker->email,
		'bank' => $this->faker->company,
		'account' => $this->faker->iban('EE'),
		'worklist' => $this->faker->sentence(4),
		'additional_information' => $this->faker->sentence(3),
		'requested_amount' => $amount,
		'self_financing_amount' => $amount/10,
		'co_financing_amount' => $amount/15,
		'mandate' => null,
		'created' => now()->subMonth(1)->addDays($this->faker->randomDigit()),
		'state' => 'evaluation',
		'modified' => now()->subMonth(1)->addDays($this->faker->randomDigit()),
		'pdf' => 27197,
		'ddoc' => null,
		'lang' => 'et',
		'creater' => $person->id,
		'ownerperson' => $owner->id,
		'county' => $mma->county,
		'parish' => $mma->parish,
		'signed' => now()->subMonth(1)->addDays($this->faker->randomDigit()),
		'person' => 319,
		'message' => null,
		'to_fix_deadline' => null,
		'to_fix_date' => null,
		'repaired' => null,
		'report' => null,
		'signtype' => ['manual', 'digital'][$this->faker->numberBetween(0,1)],
		'submitted' => now()->subMonth(1)->addDays($this->faker->randomDigit()),
		'adminstate' => 'evaluation',
		'total_amount' => $amount,
		'grants_from_other_sources' => null,
		'additional_coordination_information' => $this->faker->sentence(3),
		'application_round' => null,
		'module_person' => 319,
		'module_deadline' => null,
		'kmkr' => $this->faker->randomLetter(),
		'confirmationfrom_the_applicant' => 1,
		'repairer' => null,
		'repairer_type' => null,
		'domain' => null,
		'cancel_decision' => null,
		'confirm_decision' => null,
		'confirm_date' => null,
		'reject_date' => null,
		'cancel_date' => null,
		'nosatisfied_date' => null,
		'refund_sum' => null,
		'purpose_of_the_grant' => null,
		'deadline_for_report' => null,
		'not_satisfied_decision' => null,
		'procedural_deadline' => now()->addYear(1),
		'document_classified' => false,
        ];
	}
}
