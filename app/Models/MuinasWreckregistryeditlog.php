<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryeditlog
 * 
 * @property int $wreckregistry
 * @property Carbon $logtime
 * @property string $tab
 * @property string $params
 * @property int $person
 *
 * @package App\Models
 */
class MuinasWreckregistryeditlog extends Model
{
	protected $table = 'muinas_wreckregistryeditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'wreckregistry',
		'logtime',
		'tab',
		'params',
		'person'
	];
}
