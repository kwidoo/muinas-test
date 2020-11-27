<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentrelation
 * 
 * @property int $lvalue
 * @property int $gvalue
 * 
 * @property MuinasMonument $muinas_monument
 *
 * @package App\Models
 */
class MuinasMonumentrelation extends Model
{
	protected $table = 'muinas_monumentrelation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lvalue' => 'int',
		'gvalue' => 'int'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'gvalue');
	}
}
