<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinforesearcherdatum
 * 
 * @property int $placeinfo
 * @property int $user
 * @property string $content
 *
 * @package App\Models
 */
class MuinasPlaceinforesearcherdatum extends Model
{
	protected $table = 'muinas_placeinforesearcherdata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'user' => 'int'
	];

	protected $fillable = [
		'content'
	];
}
