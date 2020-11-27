<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceresponsiblespecialist
 * 
 * @property int $activitylicence
 * @property int $responsiblespecialist
 * 
 * @property MuinasActivitylicence $muinas_activitylicence
 *
 * @package App\Models
 */
class MuinasActivitylicenceresponsiblespecialist extends Model
{
	protected $table = 'muinas_activitylicenceresponsiblespecialist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];

	public function muinas_activitylicence()
	{
		return $this->belongsTo(MuinasActivitylicence::class, 'activitylicence');
	}
}
