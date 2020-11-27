<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoCompiller
 * 
 * @property int $proviso
 * @property int $compiller
 * 
 * @property MuinasProviso $muinas_proviso
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasProvisoCompiller extends Model
{
	protected $table = 'muinas_proviso_compillers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'compiller' => 'int'
	];

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'proviso');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'compiller');
	}
}
