<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfolmnoticeeditlog
 * 
 * @property int $placeinfolmnotice
 * @property string $action
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 *
 * @package App\Models
 */
class MuinasPlaceinfolmnoticeeditlog extends Model
{
	protected $table = 'muinas_placeinfolmnoticeeditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfolmnotice' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'placeinfolmnotice',
		'action',
		'logtime',
		'params',
		'person'
	];
}
