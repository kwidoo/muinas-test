<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentdescriptioneditlog
 * 
 * @property int|null $monumentdescription
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 *
 * @package App\Models
 */
class MuinasMonumentdescriptioneditlog extends Model
{
	protected $table = 'muinas_monumentdescriptioneditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monumentdescription' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'monumentdescription',
		'logtime',
		'params',
		'person'
	];
}
