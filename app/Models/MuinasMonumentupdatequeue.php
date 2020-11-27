<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentupdatequeue
 * 
 * @property int $monument
 * @property string $type
 * @property Carbon|null $queued
 * @property string|null $trace
 *
 * @package App\Models
 */
class MuinasMonumentupdatequeue extends Model
{
	protected $table = 'muinas_monumentupdatequeue';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $dates = [
		'queued'
	];

	protected $fillable = [
		'queued',
		'trace'
	];
}
