<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActionlog
 * 
 * @property int $user
 * @property Carbon $datetime
 * @property string $ip
 * @property string $session
 * @property string $controller
 * @property string $action
 * @property string|null $params
 *
 * @package App\Models
 */
class MuinasActionlog extends Model
{
	protected $table = 'muinas_actionlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'user',
		'datetime',
		'ip',
		'session',
		'controller',
		'action',
		'params'
	];
}
