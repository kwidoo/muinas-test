<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumenttypechangelog
 * 
 * @property int $id
 * @property int $monument
 * @property string|null $type
 * @property Carbon $created
 * @property int $person
 *
 * @package App\Models
 */
class MuinasMonumenttypechangelog extends Model
{
	protected $table = 'muinas_monumenttypechangelog';
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
		'type',
		'created',
		'person'
	];
}
