<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationinternalcomment
 * 
 * @property int $id
 * @property int|null $activitylicenceapplication_id
 * @property int|null $person
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationinternalcomment extends Model
{
	protected $table = 'muinas_activitylicenceapplicationinternalcomment';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int',
		'person' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'person',
		'message',
		'created',
		'status'
	];
}
