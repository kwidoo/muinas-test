<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasConfidantmonumenttype
 * 
 * @property int $confidant
 * @property int $monumenttype
 *
 * @package App\Models
 */
class MuinasConfidantmonumenttype extends Model
{
	protected $table = 'muinas_confidantmonumenttype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'confidant' => 'int',
		'monumenttype' => 'int'
	];
}
