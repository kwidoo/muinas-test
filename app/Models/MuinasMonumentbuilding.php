<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentbuilding
 * 
 * @property int|null $ehrcode
 * @property int $building
 * @property int $monument
 * @property string|null $address
 * @property string $name
 * @property Carbon $created
 * @property bool|null $ismonument
 * @property int|null $buildingshapeshape
 *
 * @package App\Models
 */
class MuinasMonumentbuilding extends Model
{
	protected $table = 'muinas_monumentbuilding';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ehrcode' => 'int',
		'building' => 'int',
		'monument' => 'int',
		'ismonument' => 'bool',
		'buildingshapeshape' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'ehrcode',
		'address',
		'name',
		'created',
		'ismonument',
		'buildingshapeshape'
	];
}
