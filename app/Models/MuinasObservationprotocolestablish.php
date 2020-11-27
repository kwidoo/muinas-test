<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocolestablish
 * 
 * @property int $id
 * @property int $observationprotocol
 * @property string $establish
 * 
 * @property MuinasObservationprotocol $muinas_observationprotocol
 *
 * @package App\Models
 */
class MuinasObservationprotocolestablish extends Model
{
	protected $table = 'muinas_observationprotocolestablish';
	public $timestamps = false;

	protected $casts = [
		'observationprotocol' => 'int'
	];

	protected $fillable = [
		'observationprotocol',
		'establish'
	];

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}
}
