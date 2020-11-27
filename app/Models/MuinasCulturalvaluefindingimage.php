<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCulturalvaluefindingimage
 * 
 * @property int $culturalvaluefinding
 * @property int $imagebank
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasCulturalvaluefindingimage extends Model
{
	protected $table = 'muinas_culturalvaluefindingimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'culturalvaluefinding' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'culturalvaluefinding',
		'imagebank',
		'description',
		'position'
	];
}
