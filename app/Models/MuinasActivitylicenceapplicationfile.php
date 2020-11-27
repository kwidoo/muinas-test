<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationfile
 * 
 * @property int $id
 * @property int $activitylicenceapplication_id
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
class MuinasActivitylicenceapplicationfile extends Model
{
	protected $table = 'muinas_activitylicenceapplicationfile';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int',
		'coordination' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'disabled' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'coordination',
		'filebank',
		'title',
		'person',
		'created',
		'type',
		'disabled'
	];
}
