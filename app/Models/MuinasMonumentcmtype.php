<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcmtype
 * 
 * @property int $monument
 * @property int $cm_type
 *
 * @package App\Models
 */
class MuinasMonumentcmtype extends Model
{
	protected $table = 'muinas_monumentcmtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'cm_type' => 'int'
	];

	protected $fillable = [
		'monument',
		'cm_type'
	];
}
