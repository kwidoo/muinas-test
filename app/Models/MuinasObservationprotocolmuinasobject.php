<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocolmuinasobject
 * 
 * @property int $muinasobject
 * @property int $observationprotocol
 * @property int|null $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasObservationprotocol $muinas_observationprotocol
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasObservationprotocolmuinasobject extends Model
{
	protected $table = 'muinas_observationprotocolmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'observationprotocol' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
