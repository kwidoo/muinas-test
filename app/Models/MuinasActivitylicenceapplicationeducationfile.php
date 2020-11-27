<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationeducationfile
 * 
 * @property int $id
 * @property int $activitylicenceapplication_education_id
 * @property int|null $coordination
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property string|null $type
 * @property int|null $disabled
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationeducationfile extends Model
{
	protected $table = 'muinas_activitylicenceapplicationeducationfile';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_education_id' => 'int',
		'coordination' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'disabled' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_education_id',
		'coordination',
		'filebank',
		'title',
		'person',
		'created',
		'type',
		'disabled'
	];
}
