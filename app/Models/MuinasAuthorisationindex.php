<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationindex
 * 
 * @property int $authorisation
 * @property string $field
 * @property int $valueint
 * @property string $valuetext
 *
 * @package App\Models
 */
class MuinasAuthorisationindex extends Model
{
	protected $table = 'muinas_authorisationindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'valueint' => 'int'
	];

	protected $fillable = [
		'authorisation',
		'field',
		'valueint',
		'valuetext'
	];
}
