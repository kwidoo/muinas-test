<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagerkvrobjectlog
 * 
 * @property Carbon $logstamp
 * @property int $heritage
 * @property string $rkvrobject
 * @property string $type
 * @property string $cohesion
 *
 * @package App\Models
 */
class MuinasHeritagerkvrobjectlog extends Model
{
	protected $table = 'muinas_heritagerkvrobjectlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $dates = [
		'logstamp'
	];

	protected $fillable = [
		'logstamp',
		'heritage',
		'rkvrobject',
		'type',
		'cohesion'
	];
}
