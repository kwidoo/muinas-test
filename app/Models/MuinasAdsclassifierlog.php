<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsclassifierlog
 * 
 * @property int $id
 * @property Carbon $logstamp
 * @property int $lastid
 *
 * @package App\Models
 */
class MuinasAdsclassifierlog extends Model
{
	protected $table = 'muinas_adsclassifierlog';
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
