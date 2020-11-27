<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticecoordination
 * 
 * @property int $worknotice
 * @property int $coordination
 *
 * @package App\Models
 */
class MuinasWorknoticecoordination extends Model
{
	protected $table = 'muinas_worknoticecoordination';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'coordination' => 'int'
	];

	protected $fillable = [
		'worknotice',
		'coordination'
	];
}
