<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportactivitylicence
 * 
 * @property int $grantapplicationreport
 * @property int $activitylicence
 * 
 * @property MuinasGrantapplicationreport $muinas_grantapplicationreport
 * @property MuinasActivitylicence $muinas_activitylicence
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportactivitylicence extends Model
{
	protected $table = 'muinas_grantapplicationreportactivitylicence';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplicationreport' => 'int',
		'activitylicence' => 'int'
	];

	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'grantapplicationreport');
	}

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'activitylicence');
	}
}
