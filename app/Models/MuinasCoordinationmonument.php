<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationmonument
 * 
 * @property int $id
 * @property int $monument
 * @property int $coordination
 * @property int $address
 *
 * @package App\Models
 */
class MuinasCoordinationmonument extends Model
{
	protected $table = 'muinas_coordinationmonument';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'coordination' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'monument',
		'coordination',
		'address'
	];
}
