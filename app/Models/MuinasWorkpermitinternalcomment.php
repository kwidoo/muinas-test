<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitinternalcomment
 * 
 * @property int $id
 * @property int|null $workpermit
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 *
 * @package App\Models
 */
class MuinasWorkpermitinternalcomment extends Model
{
	protected $table = 'muinas_workpermitinternalcomment';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'person' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermit',
		'person',
		'message',
		'created',
		'status'
	];
}
