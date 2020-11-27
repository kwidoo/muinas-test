<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceResponsiblespecialistsWork
 * 
 * @property int $business_licence
 * @property int $specialist_licence
 * @property int $work
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceResponsiblespecialistsWork extends Model
{
	protected $table = 'muinas_activitylicence_responsiblespecialists_works';
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
