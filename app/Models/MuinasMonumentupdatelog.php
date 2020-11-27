<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentupdatelog
 * 
 * @property int $monument
 * @property string|null $type
 * @property Carbon|null $start
 * @property Carbon|null $updated
 * @property string|null $status
 * @property string|null $message
 * @property string|null $log
 *
 * @package App\Models
 */
class MuinasMonumentupdatelog extends Model
{
	protected $table = 'muinas_monumentupdatelog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'start',
		'updated'
	];

	protected $fillable = [
		'monument',
		'type',
		'start',
		'updated',
		'status',
		'message',
		'log'
	];
}
