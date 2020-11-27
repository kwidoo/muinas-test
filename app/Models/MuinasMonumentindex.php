<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentindex
 * 
 * @property int $monument
 * @property string $field
 * @property int $valueint
 * @property string $valuetext
 *
 * @package App\Models
 */
class MuinasMonumentindex extends Model
{
	protected $table = 'muinas_monumentindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'valueint' => 'int'
	];

	protected $fillable = [
		'monument',
		'field',
		'valueint',
		'valuetext'
	];
}
