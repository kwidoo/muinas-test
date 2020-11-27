<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgisindexdatum
 * 
 * @property int $id
 * @property int $placeinfo
 * @property int $person
 * @property string $title
 * @property Carbon|null $synced
 * @property string|null $source
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasPerson $muinas_person
 * @property Collection|MuinasPlaceinfopostgisindexdatacoordinatefile[] $muinas_placeinfopostgisindexdatacoordinatefiles
 * @property Collection|MuinasPlaceinfopostgisindexdataexternal[] $muinas_placeinfopostgisindexdataexternals
 * @property Collection|MuinasPlaceinfopostgisindexdatamapplace[] $muinas_placeinfopostgisindexdatamapplaces
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgisindexdatum extends Model
{
	protected $table = 'muinas_placeinfopostgisindexdata';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'synced'
	];

	protected $fillable = [
		'placeinfo',
		'person',
		'title',
		'synced',
		'source'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_placeinfopostgisindexdatacoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatacoordinatefile::class, 'placeinfopostgisindexdata');
	}

	public function muinas_placeinfopostgisindexdataexternals()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdataexternal::class, 'placeinfopostgisindexdata');
	}

	public function muinas_placeinfopostgisindexdatamapplaces()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatamapplace::class, 'placeinfopostgisindexdata');
	}
}
