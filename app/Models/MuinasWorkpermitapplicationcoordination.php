<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationcoordination
 * 
 * @property int $workpermitapplication
 * @property int $coordination
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationcoordination extends Model
{
	protected $table = 'muinas_workpermitapplicationcoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int',
		'coordination' => 'int'
	];

	protected $fillable = [
		'workpermitapplication',
		'coordination'
	];
}
