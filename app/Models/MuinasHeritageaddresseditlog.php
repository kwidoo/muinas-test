<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageaddresseditlog
 * 
 * @property int $heritageaddress
 * @property int $heritage
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 * @property string $process
 * @property string $action
 * @property string $record
 *
 * @package App\Models
 */
class MuinasHeritageaddresseditlog extends Model
{
	protected $table = 'muinas_heritageaddresseditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritageaddress' => 'int',
		'heritage' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'heritageaddress',
		'heritage',
		'logtime',
		'params',
		'person',
		'process',
		'action',
		'record'
	];
}
