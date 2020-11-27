<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationcmType
 * 
 * @property int $grantapplication
 * @property int $cm_type
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasGrantapplicationcmType extends Model
{
	protected $table = 'muinas_grantapplicationcm_type';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'cm_type' => 'int'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_type');
	}
}
