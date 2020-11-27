<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNoticelog
 * 
 * @property Carbon $datetime
 * @property string|null $dispatcher
 * @property string|null $trace
 *
 * @package App\Models
 */
class MuinasNoticelog extends Model
{
	protected $table = 'muinas_noticelog';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'datetime',
		'dispatcher',
		'trace'
	];
}
