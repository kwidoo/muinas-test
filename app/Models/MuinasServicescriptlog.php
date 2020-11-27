<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasServicescriptlog
 * 
 * @property int $id
 * @property int $servicescript
 * @property Carbon $started
 * @property Carbon $ended
 * @property string $messages
 * @property string $errors
 * @property string|null $fatalerror
 *
 * @package App\Models
 */
class MuinasServicescriptlog extends Model
{
	protected $table = 'muinas_servicescriptlog';
	public $timestamps = false;

	protected $casts = [
		'servicescript' => 'int'
	];

	protected $dates = [
		'started',
		'ended'
	];

	protected $fillable = [
		'servicescript',
		'started',
		'ended',
		'messages',
		'errors',
		'fatalerror'
	];
}
