<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentDeprotectionprocessPhasePerson
 * 
 * @property int $phase
 * @property int $person
 * 
 * @property MuinasPerson $muinas_person
 * @property MuinasMonumentDeprotectionprocessPhase $muinas_monument_deprotectionprocess_phase
 *
 * @package App\Models
 */
class MuinasMonumentDeprotectionprocessPhasePerson extends Model
{
	protected $table = 'muinas_monument_deprotectionprocess_phase_person';
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

	public function muinas_monument_deprotectionprocess_phase()
	{
		return $this->belongsTo(MuinasMonumentDeprotectionprocessPhase::class, 'phase');
	}
}
