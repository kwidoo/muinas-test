<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationcoordination
 * 
 * @property int $pypapplication
 * @property int $coordination
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasCoordination $muinas_coordination
 *
 * @package App\Models
 */
class MuinasPypapplicationcoordination extends Model
{
	protected $table = 'muinas_pypapplicationcoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'coordination' => 'int'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}
}
