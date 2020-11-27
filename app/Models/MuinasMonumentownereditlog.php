<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentownereditlog
 * 
 * @property int $monumentowner
 * @property int $monument
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 * @property string $process
 * @property string $action
 * @property string $record
 *
 * @package App\Models
 */
class MuinasMonumentownereditlog extends Model
{
	protected $table = 'muinas_monumentownereditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monumentowner' => 'int',
		'monument' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'monumentowner',
		'monument',
		'logtime',
		'params',
		'person',
		'process',
		'action',
		'record'
	];
}
