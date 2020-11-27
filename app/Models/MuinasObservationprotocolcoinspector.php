<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocolcoinspector
 * 
 * @property int $id
 * @property int $person
 * @property int $observationprotocol
 * 
 * @property MuinasPerson $muinas_person
 * @property MuinasObservationprotocol $muinas_observationprotocol
 *
 * @package App\Models
 */
class MuinasObservationprotocolcoinspector extends Model
{
	protected $table = 'muinas_observationprotocolcoinspector';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'observationprotocol' => 'int'
	];

	protected $fillable = [
		'person',
		'observationprotocol'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}
}
