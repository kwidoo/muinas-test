<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentrkvrobjectlog
 * 
 * @property Carbon $logstamp
 * @property int $monument
 * @property string $rkvrobject
 * @property string $type
 * @property string $cohesion
 *
 * @package App\Models
 */
class MuinasMonumentrkvrobjectlog extends Model
{
	protected $table = 'muinas_monumentrkvrobjectlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'logstamp'
	];

	protected $fillable = [
		'logstamp',
		'monument',
		'rkvrobject',
		'type',
		'cohesion'
	];
}
