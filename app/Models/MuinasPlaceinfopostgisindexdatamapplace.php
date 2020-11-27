<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgisindexdatamapplace
 * 
 * @property int $id
 * @property int $placeinfopostgisindexdata
 * @property int|null $placeinfomapplace
 * 
 * @property MuinasPlaceinfomapplace|null $muinas_placeinfomapplace
 * @property MuinasPlaceinfopostgisindexdatum $muinas_placeinfopostgisindexdatum
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgisindexdatamapplace extends Model
{
	protected $table = 'muinas_placeinfopostgisindexdatamapplace';
	public $timestamps = false;

	protected $casts = [
		'placeinfopostgisindexdata' => 'int',
		'placeinfomapplace' => 'int'
	];

	protected $fillable = [
		'placeinfopostgisindexdata',
		'placeinfomapplace'
	];

	public function muinas_placeinfomapplace()
	{
		return $this->belongsTo(MuinasPlaceinfomapplace::class, 'placeinfomapplace');
	}

	public function muinas_placeinfopostgisindexdatum()
	{
		return $this->belongsTo(MuinasPlaceinfopostgisindexdatum::class, 'placeinfopostgisindexdata');
	}
}
