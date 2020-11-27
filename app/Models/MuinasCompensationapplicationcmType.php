<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationcmType
 * 
 * @property int $compensationapplication
 * @property int $cm_type
 *
 * @package App\Models
 */
class MuinasCompensationapplicationcmType extends Model
{
	protected $table = 'muinas_compensationapplicationcm_type';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'cm_type' => 'int'
	];
}
