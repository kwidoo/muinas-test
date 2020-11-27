<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceresponsiblespecialistVersion
 * 
 * @property int $activitylicence
 * @property int $responsiblespecialist
 *
 * @package App\Models
 */
class MuinasActivitylicenceresponsiblespecialistVersion extends Model
{
	protected $table = 'muinas_activitylicenceresponsiblespecialist_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];
}
