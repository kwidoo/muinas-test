<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomonument
 * 
 * @property int $placeinfo
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasPlaceinfomonument extends Model
{
	protected $table = 'muinas_placeinfomonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'monument' => 'int'
	];
}
