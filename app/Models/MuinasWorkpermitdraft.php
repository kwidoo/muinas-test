<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitdraft
 * 
 * @property int $id
 * @property int|null $workpermit
 * @property int $person
 * @property string|null $receivers
 * @property string|null $status
 * @property string|null $message
 * @property string|null $reason
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorkpermitdraft extends Model
{
	protected $table = 'muinas_workpermitdraft';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermit',
		'person',
		'receivers',
		'status',
		'message',
		'reason',
		'created'
	];
}
