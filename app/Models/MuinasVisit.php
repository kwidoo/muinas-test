<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasVisit
 * 
 * @property int $visits
 * @property int $id
 *
 * @package App\Models
 */
class MuinasVisit extends Model
{
	protected $table = 'muinas_visits';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'visits' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'visits'
	];
}
