<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoplan
 * 
 * @property int $placeinfo
 * @property int $imagebank
 * @property string $description
 *
 * @package App\Models
 */
class MuinasPlaceinfoplan extends Model
{
	protected $table = 'muinas_placeinfoplan';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'imagebank' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
