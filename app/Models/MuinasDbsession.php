<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDbsession
 * 
 * @property string $id
 * @property Carbon $expire
 *
 * @package App\Models
 */
class MuinasDbsession extends Model
{
	protected $table = 'muinas_dbsession';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'expire'
	];

	protected $fillable = [
		'expire'
	];
}
