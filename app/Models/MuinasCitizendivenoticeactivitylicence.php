<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticeactivitylicence
 * 
 * @property int $id
 * @property int $citizendivenotice
 * @property int $activitylicence
 * @property int|null $responsiblespecialist
 * 
 * @property MuinasActivitylicence|null $muinas_activitylicence
 * @property MuinasCitizendivenotice $muinas_citizendivenotice
 *
 * @package App\Models
 */
class MuinasCitizendivenoticeactivitylicence extends Model
{
	protected $table = 'muinas_citizendivenoticeactivitylicence';
	public $timestamps = false;

	protected $casts = [
		'citizendivenotice' => 'int',
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];

	protected $fillable = [
		'citizendivenotice',
		'activitylicence',
		'responsiblespecialist'
	];

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_citizendivenotice()
	{
		return $this->belongsTo(MuinasCitizendivenotice::class, 'citizendivenotice');
	}
}
