<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticestatelog
 * 
 * @property int $id
 * @property int $worknotice
 * @property string|null $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorknoticestatelog extends Model
{
	protected $table = 'muinas_worknoticestatelog';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknotice',
		'state',
		'name',
		'message',
		'created'
	];
}
