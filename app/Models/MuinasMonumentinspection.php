<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinspection
 * 
 * @property int $id
 * @property int $monument
 * @property Carbon $inspected
 * @property int $cm_state
 * @property Carbon $created
 * @property bool|null $mark
 * @property bool|null $inuse
 * @property int $person
 * @property string $description
 * @property Carbon|null $stolen
 * @property string|null $stolenaccuracy
 * @property bool|null $latest
 *
 * @package App\Models
 */
class MuinasMonumentinspection extends Model
{
	protected $table = 'muinas_monumentinspection';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'cm_state' => 'int',
		'mark' => 'bool',
		'inuse' => 'bool',
		'person' => 'int',
		'latest' => 'bool'
	];

	protected $dates = [
		'inspected',
		'created',
		'stolen'
	];

	protected $fillable = [
		'monument',
		'inspected',
		'cm_state',
		'created',
		'mark',
		'inuse',
		'person',
		'description',
		'stolen',
		'stolenaccuracy',
		'latest'
	];
}
