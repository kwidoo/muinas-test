<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistrycomment
 * 
 * @property int $id
 * @property int $wreckregistry
 * @property string $lang
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $status
 * @property Carbon $datetime
 * @property string $ip
 * @property string $session
 *
 * @package App\Models
 */
class MuinasWreckregistrycomment extends Model
{
	protected $table = 'muinas_wreckregistrycomment';
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'wreckregistry',
		'lang',
		'name',
		'email',
		'comment',
		'status',
		'datetime',
		'ip',
		'session'
	];
}
