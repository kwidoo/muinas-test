<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasServicescript
 * 
 * @property int $id
 * @property string $script
 * @property string $description
 * @property Carbon|null $lastexecuted
 * @property Carbon|null $lastsuccessful
 * @property int $interval
 * @property string $intervaltype
 * @property int|null $automatic
 * @property bool|null $executing
 * @property string $fourceperiod
 *
 * @package App\Models
 */
class MuinasServicescript extends Model
{
	protected $table = 'muinas_servicescript';
	public $timestamps = false;

	protected $casts = [
		'interval' => 'int',
		'automatic' => 'int',
		'executing' => 'bool'
	];

	protected $dates = [
		'lastexecuted',
		'lastsuccessful'
	];

	protected $fillable = [
		'script',
		'description',
		'lastexecuted',
		'lastsuccessful',
		'interval',
		'intervaltype',
		'automatic',
		'executing',
		'fourceperiod'
	];
}
