<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentheritage
 * 
 * @property int $monument
 * @property int $heritage
 * @property int $id
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasMonumentheritage extends Model
{
	protected $table = 'muinas_monumentheritage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'heritage' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'id'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
