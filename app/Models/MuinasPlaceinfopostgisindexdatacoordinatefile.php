<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgisindexdatacoordinatefile
 * 
 * @property int $id
 * @property int $placeinfopostgisindexdata
 * @property int|null $placeinfocoordinatefile
 * 
 * @property MuinasPlaceinfopostgisindexdatum $muinas_placeinfopostgisindexdatum
 * @property MuinasPlaceinfocoordinatefile|null $muinas_placeinfocoordinatefile
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgisindexdatacoordinatefile extends Model
{
	protected $table = 'muinas_placeinfopostgisindexdatacoordinatefile';
	public $timestamps = false;

	protected $casts = [
		'placeinfopostgisindexdata' => 'int',
		'placeinfocoordinatefile' => 'int'
	];

	protected $fillable = [
		'placeinfopostgisindexdata',
		'placeinfocoordinatefile'
	];

	public function muinas_placeinfopostgisindexdatum()
	{
		return $this->belongsTo(MuinasPlaceinfopostgisindexdatum::class, 'placeinfopostgisindexdata');
	}

	public function muinas_placeinfocoordinatefile()
	{
		return $this->belongsTo(MuinasPlaceinfocoordinatefile::class, 'placeinfocoordinatefile', 'filebank');
	}
}
