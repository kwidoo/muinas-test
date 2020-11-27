<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationcomment
 * 
 * @property int $id
 * @property int|null $workpermitapplication
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationcomment extends Model
{
	protected $table = 'muinas_workpermitapplicationcomment';
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int',
		'person' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermitapplication',
		'person',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
