<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationauthorisation
 * 
 * @property int $compensationapplication
 * @property int $authorisation
 * 
 * @property MuinasCompensationapplication $muinas_compensationapplication
 * @property MuinasAuthorisation $muinas_authorisation
 *
 * @package App\Models
 */
class MuinasCompensationapplicationauthorisation extends Model
{
	protected $table = 'muinas_compensationapplicationauthorisation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'authorisation' => 'int'
	];

	public function muinas_compensationapplication()
	{
		return $this->belongsTo(MuinasCompensationapplication::class, 'compensationapplication');
	}

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}
}
