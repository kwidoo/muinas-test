<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceResponsiblespecialistsWorktype
 * 
 * @property int $business_licence
 * @property int $specialist_licence
 * @property int $worktype
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceResponsiblespecialistsWorktype extends Model
{
	protected $table = 'muinas_activitylicence_responsiblespecialists_worktypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'business_licence' => 'int',
		'specialist_licence' => 'int',
		'worktype' => 'int'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'worktype');
	}
}
