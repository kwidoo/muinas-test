<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationauthorisation
 * 
 * @property int $coordination
 * @property int $authorisation
 * 
 * @property MuinasCoordination $muinas_coordination
 * @property MuinasAuthorisation $muinas_authorisation
 *
 * @package App\Models
 */
class MuinasCoordinationauthorisation extends Model
{
	protected $table = 'muinas_coordinationauthorisation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'authorisation' => 'int'
	];

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}
}
