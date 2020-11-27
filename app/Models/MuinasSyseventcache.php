<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSyseventcache
 * 
 * @property string $field
 * @property string $ns
 * @property Carbon $cached
 * @property string|null $cache
 *
 * @package App\Models
 */
class MuinasSyseventcache extends Model
{
	protected $table = 'muinas_syseventcache';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'cached'
	];

	protected $fillable = [
		'cached',
		'cache'
	];
}
