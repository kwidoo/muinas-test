<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessReferralPerson
 * 
 * @property int $coordinationprocess
 * @property int $person
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasCoordinationprocessReferralPerson extends Model
{
	protected $table = 'muinas_coordinationprocess_referral_person';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int',
		'person' => 'int'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
