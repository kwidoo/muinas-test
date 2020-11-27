<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcatastralunit
 * 
 * @property int $id
 * @property int $monument
 * @property string $unit
 * @property Carbon $modified
 * @property string $cohesion
 * @property int $overlap
 * @property string $adsoid
 * @property Carbon|null $ownersupdated
 * @property Carbon|null $addressupdated
 *
 * @package App\Models
 */
class MuinasMonumentcatastralunit extends Model
{
	protected $table = 'muinas_monumentcatastralunit';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'overlap' => 'int'
	];

	protected $dates = [
		'modified',
		'ownersupdated',
		'addressupdated'
	];

	protected $fillable = [
		'monument',
		'unit',
		'modified',
		'cohesion',
		'overlap',
		'adsoid',
		'ownersupdated',
		'addressupdated'
	];
}
