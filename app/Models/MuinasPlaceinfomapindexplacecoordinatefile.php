<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapindexplacecoordinatefile
 * 
 * @property int $id
 * @property int $placeinfomapindexplace
 * @property int|null $placeinfocoordinatefile
 * @property int|null $place
 * 
 * @property MuinasPlaceinfomapindexplace $muinas_placeinfomapindexplace
 * @property MuinasPlaceinfocoordinatefile|null $muinas_placeinfocoordinatefile
 *
 * @package App\Models
 */
class MuinasPlaceinfomapindexplacecoordinatefile extends Model
{
	protected $table = 'muinas_placeinfomapindexplacecoordinatefile';
	public $timestamps = false;

	protected $casts = [
		'placeinfomapindexplace' => 'int',
		'placeinfocoordinatefile' => 'int',
		'place' => 'int'
	];

	protected $fillable = [
		'placeinfomapindexplace',
		'placeinfocoordinatefile',
		'place'
	];

	public function muinas_placeinfomapindexplace()
	{
		return $this->belongsTo(MuinasPlaceinfomapindexplace::class, 'placeinfomapindexplace');
	}

	public function muinas_placeinfocoordinatefile()
	{
		return $this->belongsTo(MuinasPlaceinfocoordinatefile::class, 'placeinfocoordinatefile', 'filebank');
	}
}
