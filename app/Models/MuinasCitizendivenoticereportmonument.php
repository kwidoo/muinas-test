<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportmonument
 * 
 * @property int $citizendivenoticereport
 * @property int $monument
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportmonument extends Model
{
	protected $table = 'muinas_citizendivenoticereportmonument';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
		'monument' => 'int'
	];
}
