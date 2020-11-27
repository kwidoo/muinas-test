<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationcomment
 * 
 * @property int $id
 * @property int|null $activitylicenceapplication_id
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationcomment extends Model
{
	protected $table = 'muinas_activitylicenceapplicationcomment';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int',
		'person' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'person',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
