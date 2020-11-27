<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEmergencysupportmonument
 * 
 * @property int $id
 * @property int $monument
 * @property int $emergencysupport
 *
 * @package App\Models
 */
class MuinasEmergencysupportmonument extends Model
{
	protected $table = 'muinas_emergencysupportmonument';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'emergencysupport' => 'int'
	];

	protected $fillable = [
		'monument',
		'emergencysupport'
	];
}
