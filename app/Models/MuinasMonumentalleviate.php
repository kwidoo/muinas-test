<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentalleviate
 * 
 * @property int $id
 * @property int $monument
 * @property string $description
 * @property Carbon $created
 * @property int $person
 * @property string $type
 *
 * @package App\Models
 */
class MuinasMonumentalleviate extends Model
{
	protected $table = 'muinas_monumentalleviate';
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
		'description',
		'created',
		'person',
		'type'
	];
}
