<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfocoordinatefile
 * 
 * @property int $placeinfo
 * @property int $filebank
 * @property string $title
 * @property string $function
 * @property int $person
 * @property Carbon|null $parsed
 * @property string|null $parsemsg
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson $muinas_person
 * @property Collection|MuinasPlaceinfomapindexplacecoordinatefile[] $muinas_placeinfomapindexplacecoordinatefiles
 * @property Collection|MuinasPlaceinfopostgisindexdatacoordinatefile[] $muinas_placeinfopostgisindexdatacoordinatefiles
 *
 * @package App\Models
 */
class MuinasPlaceinfocoordinatefile extends Model
{
	protected $table = 'muinas_placeinfocoordinatefile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'parsed'
	];

	protected $fillable = [
		'title',
		'function',
		'person',
		'parsed',
		'parsemsg'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_placeinfomapindexplacecoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfomapindexplacecoordinatefile::class, 'placeinfocoordinatefile', 'filebank');
	}

	public function muinas_placeinfopostgisindexdatacoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatacoordinatefile::class, 'placeinfocoordinatefile', 'filebank');
	}
}
