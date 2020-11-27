<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessDirectetion
 * 
 * @property int $coordinationprocess
 * @property Carbon $date
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 *
 * @package App\Models
 */
class MuinasCoordinationprocessDirectetion extends Model
{
	protected $table = 'muinas_coordinationprocess_directetion';
	protected $primaryKey = 'coordinationprocess';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}
}
