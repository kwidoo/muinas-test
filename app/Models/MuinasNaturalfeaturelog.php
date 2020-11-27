<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasNaturalfeaturelog
 * 
 * @property int $id
 * @property Carbon $logstamp
 * @property int $lastid
 *
 * @package App\Models
 */
class MuinasNaturalfeaturelog extends Model
{
	protected $table = 'muinas_naturalfeaturelog';
	public $timestamps = false;

	protected $casts = [
		'lastid' => 'int'
	];

	protected $dates = [
		'logstamp'
	];

	protected $fillable = [
		'logstamp',
		'lastid'
	];
}
