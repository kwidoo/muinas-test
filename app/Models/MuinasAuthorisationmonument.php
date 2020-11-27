<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationmonument
 * 
 * @property int $id
 * @property int $monument
 * @property int $authorisation
 * @property int $address
 *
 * @package App\Models
 */
class MuinasAuthorisationmonument extends Model
{
	protected $table = 'muinas_authorisationmonument';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'authorisation' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'monument',
		'authorisation',
		'address'
	];
}
