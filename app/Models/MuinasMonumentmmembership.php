<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentmmembership
 * 
 * @property int $immovable
 * @property int $movable
 *
 * @package App\Models
 */
class MuinasMonumentmmembership extends Model
{
	protected $table = 'muinas_monumentmmembership';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'immovable' => 'int',
		'movable' => 'int'
	];
}
