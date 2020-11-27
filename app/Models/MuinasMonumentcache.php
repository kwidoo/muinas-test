<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcache
 * 
 * @property int $monument
 * @property string $key
 * @property Carbon $cached
 * @property string|null $cache
 *
 * @package App\Models
 */
class MuinasMonumentcache extends Model
{
	protected $table = 'muinas_monumentcache';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'cached'
	];

	protected $fillable = [
		'monument',
		'key',
		'cached',
		'cache'
	];
}
