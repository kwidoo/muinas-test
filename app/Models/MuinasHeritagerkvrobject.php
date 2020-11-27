<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagerkvrobject
 * 
 * @property int $heritage
 * @property string $rkvrobject
 * @property string $cohesion
 *
 * @package App\Models
 */
class MuinasHeritagerkvrobject extends Model
{
	protected $table = 'muinas_heritagerkvrobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $fillable = [
		'cohesion'
	];
}
