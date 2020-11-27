<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationCompetencycertificate
 * 
 * @property int $id
 * @property int $activitylicenceapplication_id
 * @property string $number
 * @property string $title
 * @property string $emitent
 * @property Carbon|null $active_from
 * @property Carbon|null $active_to
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationCompetencycertificate extends Model
{
	protected $table = 'muinas_activitylicenceapplication_competencycertificate';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int'
	];

	protected $dates = [
		'active_from',
		'active_to',
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'number',
		'title',
		'emitent',
		'active_from',
		'active_to',
		'created'
	];
}
