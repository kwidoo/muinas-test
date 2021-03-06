<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationehisfile
 * 
 * @property int $id
 * @property int $activitylicenceapplication_ehis_id
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
class MuinasActivitylicenceapplicationehisfile extends Model
{
	protected $table = 'muinas_activitylicenceapplicationehisfile';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_ehis_id' => 'int',
		'coordination' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'disabled' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_ehis_id',
		'coordination',
		'filebank',
		'title',
		'person',
		'created',
		'type',
		'disabled'
	];
}
