<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryinspection
 * 
 * @property int $id
 * @property int $wreckregistry
 * @property string $description
 * @property int|null $hidden
 * @property Carbon $inspected
 * @property string $status
 * @property int $cm_state
 * @property int $person
 *
 * @package App\Models
 */
class MuinasWreckregistryinspection extends Model
{
	protected $table = 'muinas_wreckregistryinspection';
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int',
		'hidden' => 'int',
		'cm_state' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'inspected'
	];

	protected $fillable = [
		'wreckregistry',
		'description',
		'hidden',
		'inspected',
		'status',
		'cm_state',
		'person'
	];
}
