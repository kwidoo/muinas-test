<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPreceptmonument
 * 
 * @property int $id
 * @property int $precept
 * @property int $monument
 * @property int $address
 *
 * @package App\Models
 */
class MuinasPreceptmonument extends Model
{
	protected $table = 'muinas_preceptmonument';
	public $timestamps = false;

	protected $casts = [
		'precept' => 'int',
		'monument' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'precept',
		'monument',
		'address'
	];
}
