<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsupdatelog
 * 
 * @property int $id
 * @property Carbon $logstamp
 * @property int $lastid
 *
 * @package App\Models
 */
class MuinasAdsupdatelog extends Model
{
	protected $table = 'muinas_adsupdatelog';
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
