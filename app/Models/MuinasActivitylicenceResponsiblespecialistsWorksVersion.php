<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceResponsiblespecialistsWorksVersion
 * 
 * @property int $business_licence
 * @property int $specialist_licence
 * @property int $work
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceResponsiblespecialistsWorksVersion extends Model
{
	protected $table = 'muinas_activitylicence_responsiblespecialists_works_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'business_licence' => 'int',
		'specialist_licence' => 'int',
		'work' => 'int'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'work');
	}
}
