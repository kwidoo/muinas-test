<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticemonument
 * 
 * @property int $divenotice
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasDivenoticemonument extends Model
{
	protected $table = 'muinas_divenoticemonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'divenotice' => 'int',
		'monument' => 'int'
	];
}
