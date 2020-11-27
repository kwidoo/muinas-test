<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceResponsiblespecialistsTypesVersion
 * 
 * @property int $business_licence
 * @property int $specialist_licence
 * @property int $type
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceResponsiblespecialistsTypesVersion extends Model
{
	protected $table = 'muinas_activitylicence_responsiblespecialists_types_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'business_licence' => 'int',
		'specialist_licence' => 'int',
		'type' => 'int'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'type');
	}
}
