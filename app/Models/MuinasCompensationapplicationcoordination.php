<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationcoordination
 * 
 * @property int $compensationapplication
 * @property int $coordination
 * 
 * @property MuinasCompensationapplication $muinas_compensationapplication
 * @property MuinasCoordination $muinas_coordination
 *
 * @package App\Models
 */
class MuinasCompensationapplicationcoordination extends Model
{
	protected $table = 'muinas_compensationapplicationcoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'coordination' => 'int'
	];

	public function muinas_compensationapplication()
	{
		return $this->belongsTo(MuinasCompensationapplication::class, 'compensationapplication');
	}

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}
}
