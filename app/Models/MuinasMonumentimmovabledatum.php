<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentimmovabledatum
 * 
 * @property int $id
 * @property int $monument
 * @property string $type
 * @property string $immovabledata
 * @property Carbon $created
 * @property string $status
 *
 * @package App\Models
 */
class MuinasMonumentimmovabledatum extends Model
{
	protected $table = 'muinas_monumentimmovabledata';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'type',
		'immovabledata',
		'created',
		'status'
	];
}
