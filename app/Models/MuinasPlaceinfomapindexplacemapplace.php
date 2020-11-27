<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapindexplacemapplace
 * 
 * @property int $id
 * @property int $placeinfomapindexplace
 * @property int $placeinfomapplace
 * 
 * @property MuinasPlaceinfomapplace $muinas_placeinfomapplace
 * @property MuinasPlaceinfomapindexplace $muinas_placeinfomapindexplace
 *
 * @package App\Models
 */
class MuinasPlaceinfomapindexplacemapplace extends Model
{
	protected $table = 'muinas_placeinfomapindexplacemapplace';
	public $timestamps = false;

	protected $casts = [
		'placeinfomapindexplace' => 'int',
		'placeinfomapplace' => 'int'
	];

	protected $fillable = [
		'placeinfomapindexplace',
		'placeinfomapplace'
	];

	public function muinas_placeinfomapplace()
	{
		return $this->belongsTo(MuinasPlaceinfomapplace::class, 'placeinfomapplace');
	}

	public function muinas_placeinfomapindexplace()
	{
		return $this->belongsTo(MuinasPlaceinfomapindexplace::class, 'placeinfomapindexplace');
	}
}
