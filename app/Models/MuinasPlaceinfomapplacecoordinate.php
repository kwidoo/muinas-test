<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapplacecoordinate
 * 
 * @property int $id
 * @property int $placeinfomapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasPlaceinfomapplace $muinas_placeinfomapplace
 *
 * @package App\Models
 */
class MuinasPlaceinfomapplacecoordinate extends Model
{
	protected $table = 'muinas_placeinfomapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'placeinfomapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'placeinfomapplace',
		'lat',
		'lng'
	];

	public function muinas_placeinfomapplace()
	{
		return $this->belongsTo(MuinasPlaceinfomapplace::class, 'placeinfomapplace');
	}
}
