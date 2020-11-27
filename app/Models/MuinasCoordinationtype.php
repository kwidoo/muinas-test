<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationtype
 * 
 * @property int $coordination
 * @property int $coordination_type
 *
 * @package App\Models
 */
class MuinasCoordinationtype extends Model
{
	protected $table = 'muinas_coordinationtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'coordination_type' => 'int'
	];
}
