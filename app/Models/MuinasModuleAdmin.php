<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasModuleAdmin
 * 
 * @property int $id
 * @property string $module
 * @property int $person
 * @property int $deadline
 * @property Carbon $updated
 * @property int $person_update
 *
 * @package App\Models
 */
class MuinasModuleAdmin extends Model
{
	protected $table = 'muinas_module_admin';
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'deadline' => 'int',
		'person_update' => 'int'
	];

	protected $dates = [
		'updated'
	];

	protected $fillable = [
		'module',
		'person',
		'deadline',
		'updated',
		'person_update'
	];
}
