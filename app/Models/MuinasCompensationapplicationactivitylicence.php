<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationactivitylicence
 * 
 * @property int $compensationapplication
 * @property int $activitylicence
 *
 * @package App\Models
 */
class MuinasCompensationapplicationactivitylicence extends Model
{
	protected $table = 'muinas_compensationapplicationactivitylicence';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'activitylicence' => 'int'
	];
}
