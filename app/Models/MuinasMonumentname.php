<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentname
 * 
 * @property int $id
 * @property int $monument
 * @property string $name
 * @property Carbon $created
 * @property int $person
 * @property string $status
 *
 * @package App\Models
 */
class MuinasMonumentname extends Model
{
	protected $table = 'muinas_monumentname';
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
		'name',
		'created',
		'person',
		'status'
	];
}
