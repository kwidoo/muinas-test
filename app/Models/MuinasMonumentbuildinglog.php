<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentbuildinglog
 * 
 * @property Carbon $logstamp
 * @property int $monument
 * @property int $building
 * @property string $type
 *
 * @package App\Models
 */
class MuinasMonumentbuildinglog extends Model
{
	protected $table = 'muinas_monumentbuildinglog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'building' => 'int'
	];

	protected $dates = [
		'logstamp'
	];

	protected $fillable = [
		'logstamp',
		'monument',
		'building',
		'type'
	];
}
