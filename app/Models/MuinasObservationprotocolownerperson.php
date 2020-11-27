<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocolownerperson
 * 
 * @property int $id
 * @property int $ownerperson
 * @property int $observationprotocol
 * 
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasObservationprotocol $muinas_observationprotocol
 *
 * @package App\Models
 */
class MuinasObservationprotocolownerperson extends Model
{
	protected $table = 'muinas_observationprotocolownerperson';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'observationprotocol' => 'int'
	];

	protected $fillable = [
		'ownerperson',
		'observationprotocol'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}
}
