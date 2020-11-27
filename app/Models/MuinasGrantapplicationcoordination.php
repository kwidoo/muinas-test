<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationcoordination
 * 
 * @property int $grantapplication
 * @property int $coordination
 * @property string|null $worker_name
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasCoordination $muinas_coordination
 *
 * @package App\Models
 */
class MuinasGrantapplicationcoordination extends Model
{
	protected $table = 'muinas_grantapplicationcoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'coordination' => 'int'
	];

	protected $fillable = [
		'worker_name'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}
}
