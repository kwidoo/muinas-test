<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentstate
 * 
 * @property int $id
 * @property int $monument
 * @property string|null $state
 * @property Carbon $created
 * @property int $person
 * @property string $status
 *
 * @package App\Models
 */
class MuinasMonumentstate extends Model
{
	protected $table = 'muinas_monumentstate';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'state',
		'created',
		'person',
		'status'
	];
}
