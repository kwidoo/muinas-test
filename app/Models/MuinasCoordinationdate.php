<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationdate
 * 
 * @property int $coordination
 * @property Carbon $coordinationdate
 * @property int $person
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasCoordinationdate extends Model
{
	protected $table = 'muinas_coordinationdate';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'coordinationdate',
		'created'
	];

	protected $fillable = [
		'person',
		'created'
	];
}
