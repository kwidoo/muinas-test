<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCulturalvaluefindingfile
 * 
 * @property int $id
 * @property int $culturalvaluefinding
 * @property string $title
 * @property string $name
 *
 * @package App\Models
 */
class MuinasCulturalvaluefindingfile extends Model
{
	protected $table = 'muinas_culturalvaluefindingfile';
	public $timestamps = false;

	protected $casts = [
		'culturalvaluefinding' => 'int'
	];

	protected $fillable = [
		'culturalvaluefinding',
		'title',
		'name'
	];
}
