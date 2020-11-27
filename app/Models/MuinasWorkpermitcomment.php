<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitcomment
 * 
 * @property int $id
 * @property int|null $workpermit
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasWorkpermitcomment extends Model
{
	protected $table = 'muinas_workpermitcomment';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'person' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermit',
		'person',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
