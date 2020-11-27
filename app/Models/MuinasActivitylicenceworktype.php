<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceworktype
 * 
 * @property int $id
 * @property int $activitylicence
 * @property int $worktype
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasActivitylicenceworktype extends Model
{
	protected $table = 'muinas_activitylicenceworktype';
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'worktype' => 'int'
	];

	protected $fillable = [
		'activitylicence',
		'worktype'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'worktype');
	}
}
