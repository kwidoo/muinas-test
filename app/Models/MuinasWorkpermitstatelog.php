<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitstatelog
 * 
 * @property int $id
 * @property int $workpermit
 * @property string|null $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorkpermitstatelog extends Model
{
	protected $table = 'muinas_workpermitstatelog';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermit',
		'state',
		'name',
		'message',
		'created'
	];
}
