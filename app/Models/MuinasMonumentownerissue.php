<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentownerissue
 * 
 * @property int $monument
 * @property int $monumentowner
 * @property string $issue
 * @property int $solved
 * @property Carbon $updated
 * @property string $status
 * @property string $monumentownerrecord
 * @property string|null $log
 *
 * @package App\Models
 */
class MuinasMonumentownerissue extends Model
{
	protected $table = 'muinas_monumentownerissue';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'monumentowner' => 'int',
		'solved' => 'int'
	];

	protected $dates = [
		'updated'
	];

	protected $fillable = [
		'monument',
		'solved',
		'updated',
		'status',
		'monumentownerrecord',
		'log'
	];
}
