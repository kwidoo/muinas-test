<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentaddresseditlog
 * 
 * @property int $monumentaddress
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
class MuinasMonumentaddresseditlog extends Model
{
	protected $table = 'muinas_monumentaddresseditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monumentaddress' => 'int',
		'monument' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'monumentaddress',
		'monument',
		'logtime',
		'params',
		'person',
		'process',
		'action',
		'record'
	];
}
