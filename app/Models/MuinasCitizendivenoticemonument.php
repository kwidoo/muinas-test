<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticemonument
 * 
 * @property int $citizendivenotice
 * @property int $monument
 * 
 * @property MuinasCitizendivenotice $muinas_citizendivenotice
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasCitizendivenoticemonument extends Model
{
	protected $table = 'muinas_citizendivenoticemonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'citizendivenotice' => 'int',
		'monument' => 'int'
	];

	public function muinas_citizendivenotice()
	{
		return $this->belongsTo(MuinasCitizendivenotice::class, 'citizendivenotice');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}
}
