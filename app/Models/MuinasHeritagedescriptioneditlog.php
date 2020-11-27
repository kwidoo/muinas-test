<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagedescriptioneditlog
 * 
 * @property int $heritagedescription
 * @property Carbon $logtime
 * @property string $params
 * @property int $person
 *
 * @package App\Models
 */
class MuinasHeritagedescriptioneditlog extends Model
{
	protected $table = 'muinas_heritagedescriptioneditlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritagedescription' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'logtime'
	];

	protected $fillable = [
		'heritagedescription',
		'logtime',
		'params',
		'person'
	];
}
