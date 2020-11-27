<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentertlink
 * 
 * @property int $id
 * @property int $monument
 * @property int $ertlink
 * @property Carbon $created
 * @property bool|null $protectedzone
 * @property string $state
 * @property bool $namechange
 * @property bool $samestatus
 *
 * @package App\Models
 */
class MuinasMonumentertlink extends Model
{
	protected $table = 'muinas_monumentertlink';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'ertlink' => 'int',
		'protectedzone' => 'bool',
		'namechange' => 'bool',
		'samestatus' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'ertlink',
		'created',
		'protectedzone',
		'state',
		'namechange',
		'samestatus'
	];
}
