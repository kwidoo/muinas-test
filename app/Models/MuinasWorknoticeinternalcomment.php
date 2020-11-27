<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticeinternalcomment
 * 
 * @property int $id
 * @property int|null $worknotice
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 *
 * @package App\Models
 */
class MuinasWorknoticeinternalcomment extends Model
{
	protected $table = 'muinas_worknoticeinternalcomment';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'person' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknotice',
		'person',
		'message',
		'created',
		'status'
	];
}
