<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapplace
 * 
 * @property int $id
 * @property int $placeinfo
 * @property string $name
 * @property string|null $type
 * @property Carbon|null $postgisfieldschanged
 * @property int|null $staticmapimage
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasFilebank|null $muinas_filebank
 * @property Collection|MuinasPlaceinfomapindexplacemapplace[] $muinas_placeinfomapindexplacemapplaces
 * @property Collection|MuinasPlaceinfomapplacecoordinate[] $muinas_placeinfomapplacecoordinates
 * @property Collection|MuinasPlaceinfopostgisindexdatamapplace[] $muinas_placeinfopostgisindexdatamapplaces
 *
 * @package App\Models
 */
class MuinasPlaceinfomapplace extends Model
{
	protected $table = 'muinas_placeinfomapplace';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'postgisfieldschanged'
	];

	protected $fillable = [
		'placeinfo',
		'name',
		'type',
		'postgisfieldschanged',
		'staticmapimage'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'staticmapimage');
	}

	public function muinas_placeinfomapindexplacemapplaces()
	{
		return $this->hasMany(MuinasPlaceinfomapindexplacemapplace::class, 'placeinfomapplace');
	}

	public function muinas_placeinfomapplacecoordinates()
	{
		return $this->hasMany(MuinasPlaceinfomapplacecoordinate::class, 'placeinfomapplace');
	}

	public function muinas_placeinfopostgisindexdatamapplaces()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatamapplace::class, 'placeinfomapplace');
	}
}
