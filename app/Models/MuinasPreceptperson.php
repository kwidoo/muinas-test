<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPreceptperson
 * 
 * @property int $precept
 * @property int $person
 *
 * @package App\Models
 */
class MuinasPreceptperson extends Model
{
	protected $table = 'muinas_preceptperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'precept' => 'int',
		'person' => 'int'
	];
}
