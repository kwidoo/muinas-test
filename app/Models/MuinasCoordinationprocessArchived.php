<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocessArchived
 * 
 * @property int $coordinationprocess
 * @property Carbon $date
 * @property int $person
 * 
 * @property MuinasCoordinationprocess $muinas_coordinationprocess
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasCoordinationprocessArchived extends Model
{
	protected $table = 'muinas_coordinationprocess_archived';
	protected $primaryKey = 'coordinationprocess';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordinationprocess' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'person'
	];

	public function muinas_coordinationprocess()
	{
		return $this->belongsTo(MuinasCoordinationprocess::class, 'coordinationprocess');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
