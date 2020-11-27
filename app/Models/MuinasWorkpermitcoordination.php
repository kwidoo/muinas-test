<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitcoordination
 * 
 * @property int $workpermit
 * @property int $coordination
 *
 * @package App\Models
 */
class MuinasWorkpermitcoordination extends Model
{
	protected $table = 'muinas_workpermitcoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'coordination' => 'int'
	];

	protected $fillable = [
		'workpermit',
		'coordination'
	];
}
