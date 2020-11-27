<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceworkVersion
 * 
 * @property int $activitylicence
 * @property int $work
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceworkVersion extends Model
{
	protected $table = 'muinas_activitylicencework_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'work' => 'int'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'work');
	}
}
