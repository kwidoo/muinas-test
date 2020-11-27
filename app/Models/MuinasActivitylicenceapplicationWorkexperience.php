<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationWorkexperience
 * 
 * @property int $id
 * @property int $activitylicenceapplication_id
 * @property string $work_object
 * @property string $work_description
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property string|null $role
 * @property string|null $responsable
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationWorkexperience extends Model
{
	protected $table = 'muinas_activitylicenceapplication_workexperience';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date',
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'work_object',
		'work_description',
		'start_date',
		'end_date',
		'role',
		'responsable',
		'created'
	];
}
