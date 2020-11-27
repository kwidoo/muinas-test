<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravepersonaward
 * 
 * @property int $wargraveperson
 * @property int $award
 *
 * @package App\Models
 */
class MuinasWargravepersonaward extends Model
{
	protected $table = 'muinas_wargravepersonaward';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wargraveperson' => 'int',
		'award' => 'int'
	];
}
