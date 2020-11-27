<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentnegative
 * 
 * @property int $id
 * @property int $monument
 * @property string $place
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasMonumentnegative extends Model
{
	protected $table = 'muinas_monumentnegative';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'place',
		'created'
	];
}
