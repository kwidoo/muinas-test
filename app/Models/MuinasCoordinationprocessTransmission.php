<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessTransmission
 * 
 * @property int $coordinationprocess
 * @property string $comment
 * @property Carbon $date
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 *
 * @package App\Models
 */
class MuinasCoordinationprocessTransmission extends Model
{
	protected $table = 'muinas_coordinationprocess_transmission';
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
		'comment',
		'date'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}
}
