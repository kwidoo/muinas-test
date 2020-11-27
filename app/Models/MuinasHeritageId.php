<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageId
 * 
 * @property int $heritage
 * @property int $monument
 * @property int|null $index
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasHeritageId extends Model
{
	protected $table = 'muinas_heritage_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'monument' => 'int',
		'index' => 'int'
	];

	protected $fillable = [
		'index'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}
}
