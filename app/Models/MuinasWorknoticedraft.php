<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticedraft
 * 
 * @property int $id
 * @property int|null $worknotice
 * @property int $person
 * @property string|null $receivers
 * @property string|null $status
 * @property string|null $message
 * @property string|null $reason
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorknoticedraft extends Model
{
	protected $table = 'muinas_worknoticedraft';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknotice',
		'person',
		'receivers',
		'status',
		'message',
		'reason',
		'created'
	];
}
