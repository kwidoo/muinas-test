<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcmsubtype
 * 
 * @property int $monument
 * @property int $cm_subtype
 * 
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasMonumentcmsubtype extends Model
{
	protected $table = 'muinas_monumentcmsubtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'cm_subtype' => 'int'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_subtype');
	}
}
