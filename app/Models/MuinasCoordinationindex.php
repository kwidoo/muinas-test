<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationindex
 * 
 * @property int $coordination
 * @property string $field
 * @property int $valueint
 * @property string $valuetext
 *
 * @package App\Models
 */
class MuinasCoordinationindex extends Model
{
	protected $table = 'muinas_coordinationindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'valueint' => 'int'
	];

	protected $fillable = [
		'coordination',
		'field',
		'valueint',
		'valuetext'
	];
}
