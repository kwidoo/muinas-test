<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravemonument
 * 
 * @property int $wargrave
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasWargravemonument extends Model
{
	protected $table = 'muinas_wargravemonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int',
		'monument' => 'int'
	];
}
