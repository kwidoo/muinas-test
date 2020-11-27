<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentProtectionprocessPhasePerson
 * 
 * @property int $phase
 * @property int $person
 * 
 * @property MuinasPerson $muinas_person
 * @property MuinasMonumentProtectionprocessPhase $muinas_monument_protectionprocess_phase
 *
 * @package App\Models
 */
class MuinasMonumentProtectionprocessPhasePerson extends Model
{
	protected $table = 'muinas_monument_protectionprocess_phase_person';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'phase' => 'int',
		'person' => 'int'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_monument_protectionprocess_phase()
	{
		return $this->belongsTo(MuinasMonumentProtectionprocessPhase::class, 'phase');
	}
}
