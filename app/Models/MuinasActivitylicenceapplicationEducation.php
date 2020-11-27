<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationEducation
 * 
 * @property int $id
 * @property int $activitylicenceapplication_id
 * @property string $place
 * @property string $program
 * @property Carbon|null $finished
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationEducation extends Model
{
	protected $table = 'muinas_activitylicenceapplication_education';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int'
	];

	protected $dates = [
		'finished',
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'place',
		'program',
		'finished',
		'created'
	];
}
