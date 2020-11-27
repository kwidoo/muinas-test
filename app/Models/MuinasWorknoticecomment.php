<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticecomment
 * 
 * @property int $id
 * @property int|null $worknotice
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasWorknoticecomment extends Model
{
	protected $table = 'muinas_worknoticecomment';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'person' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'worknotice',
		'person',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
