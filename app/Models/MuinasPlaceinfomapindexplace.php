<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapindexplace
 * 
 * @property int $id
 * @property int $placeinfo
 * @property string $title
 * @property float $x
 * @property float $y
 * @property string|null $type
 * @property string|null $source
 * @property int|null $kmlindex
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property Collection|MuinasPlaceinfomapindexplacecoordinatefile[] $muinas_placeinfomapindexplacecoordinatefiles
 * @property Collection|MuinasPlaceinfomapindexplacemapplace[] $muinas_placeinfomapindexplacemapplaces
 *
 * @package App\Models
 */
class MuinasPlaceinfomapindexplace extends Model
{
	protected $table = 'muinas_placeinfomapindexplace';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'x' => 'float',
		'y' => 'float',
		'kmlindex' => 'int'
	];

	protected $fillable = [
		'placeinfo',
		'title',
		'x',
		'y',
		'type',
		'source',
		'kmlindex'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_placeinfomapindexplacecoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfomapindexplacecoordinatefile::class, 'placeinfomapindexplace');
	}

	public function muinas_placeinfomapindexplacemapplaces()
	{
		return $this->hasMany(MuinasPlaceinfomapindexplacemapplace::class, 'placeinfomapindexplace');
	}
}
