<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationcounty
 * 
 * @property int $compensationapplication
 * @property int $county
 *
 * @package App\Models
 */
class MuinasCompensationapplicationcounty extends Model
{
	protected $table = 'muinas_compensationapplicationcounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'county' => 'int'
	];
}
