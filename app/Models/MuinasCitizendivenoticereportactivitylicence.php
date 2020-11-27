<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportactivitylicence
 * 
 * @property int $id
 * @property int $citizendivenoticereport
 * @property int $activitylicence
 * @property int|null $responsiblespecialist
 * 
 * @property MuinasActivitylicence|null $muinas_activitylicence
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportactivitylicence extends Model
{
	protected $table = 'muinas_citizendivenoticereportactivitylicence';
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];

	protected $fillable = [
		'citizendivenoticereport',
		'activitylicence',
		'responsiblespecialist'
	];

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'citizendivenoticereport');
	}
}
