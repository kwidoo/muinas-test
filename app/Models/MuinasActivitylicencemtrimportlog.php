<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicencemtrimportlog
 * 
 * @property Carbon $date
 * @property Carbon $logstamp
 *
 * @package App\Models
 */
class MuinasActivitylicencemtrimportlog extends Model
{
	protected $table = 'muinas_activitylicencemtrimportlog';
	protected $primaryKey = 'date';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'date',
		'logstamp'
	];

	protected $fillable = [
		'logstamp'
	];
}
