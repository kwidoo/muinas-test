<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticeactivitylicence
 * 
 * @property int $id
 * @property int $divenotice
 * @property int $activitylicence
 * @property int|null $responsiblespecialist
 * 
 * @property MuinasActivitylicence|null $muinas_activitylicence
 * @property MuinasDivenotice $muinas_divenotice
 *
 * @package App\Models
 */
class MuinasDivenoticeactivitylicence extends Model
{
	protected $table = 'muinas_divenoticeactivitylicence';
	public $timestamps = false;

	protected $casts = [
		'divenotice' => 'int',
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];

	protected $fillable = [
		'divenotice',
		'activitylicence',
		'responsiblespecialist'
	];

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_divenotice()
	{
		return $this->belongsTo(MuinasDivenotice::class, 'divenotice');
	}
}
