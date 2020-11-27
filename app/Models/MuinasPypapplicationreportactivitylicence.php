<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportactivitylicence
 * 
 * @property int $pypapplicationreport
 * @property int $activitylicence
 * 
 * @property MuinasPypapplicationreport $muinas_pypapplicationreport
 * @property MuinasActivitylicence $muinas_activitylicence
 *
 * @package App\Models
 */
class MuinasPypapplicationreportactivitylicence extends Model
{
	protected $table = 'muinas_pypapplicationreportactivitylicence';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplicationreport' => 'int',
		'activitylicence' => 'int'
	];

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'pypapplicationreport');
	}

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'activitylicence');
	}
}
