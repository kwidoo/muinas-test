<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentupdate
 * 
 * @property int $monument
 * @property string $type
 * @property Carbon|null $next
 *
 * @package App\Models
 */
class MuinasMonumentupdate extends Model
{
	protected $table = 'muinas_monumentupdate';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'next'
	];

	protected $fillable = [
		'next'
	];
}
