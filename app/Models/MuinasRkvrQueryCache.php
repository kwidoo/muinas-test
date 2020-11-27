<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRkvrQueryCache
 * 
 * @property string $query_md5
 * @property string|null $query
 * @property string|null $result
 * @property Carbon|null $stamp
 *
 * @package App\Models
 */
class MuinasRkvrQueryCache extends Model
{
	protected $table = 'muinas_rkvr_query_cache';
	protected $primaryKey = 'query_md5';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'query',
		'result',
		'stamp'
	];
}
