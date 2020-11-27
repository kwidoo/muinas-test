<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationcoordination
 * 
 * @property int $id
 * @property int $authorisation
 * @property int $coordination
 * @property string $type
 *
 * @package App\Models
 */
class MuinasAuthorisationcoordination extends Model
{
	protected $table = 'muinas_authorisationcoordination';
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'coordination' => 'int'
	];

	protected $fillable = [
		'authorisation',
		'coordination',
		'type'
	];
}
