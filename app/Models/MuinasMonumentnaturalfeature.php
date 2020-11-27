<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentnaturalfeature
 * 
 * @property int $id
 * @property int $monument
 * @property Carbon $created
 * @property Carbon|null $lastmodified
 * @property string $preferentialcode
 * @property string $name
 * @property string $muudatus
 *
 * @package App\Models
 */
class MuinasMonumentnaturalfeature extends Model
{
	protected $table = 'muinas_monumentnaturalfeature';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'created',
		'lastmodified'
	];

	protected $fillable = [
		'monument',
		'created',
		'lastmodified',
		'preferentialcode',
		'name',
		'muudatus'
	];
}
