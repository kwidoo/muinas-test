<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasBuilding
 * 
 * @property int $ehrid
 * @property string $ehrcode
 * @property string $name
 * @property string $status
 * @property string $address
 * @property string $geojson
 * 
 * @property Collection|MuinasHeritageBuilding[] $muinas_heritage_buildings
 * @property Collection|MuinasHeritagebuilding[] $muinas_heritagebuildings
 *
 * @package App\Models
 */
class MuinasBuilding extends Model
{
	protected $table = 'muinas_building';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ehrid' => 'int'
	];

	protected $fillable = [
		'ehrid',
		'ehrcode',
		'name',
		'status',
		'address',
		'geojson'
	];

	public function muinas_heritage_buildings()
	{
		return $this->hasMany(MuinasHeritageBuilding::class, 'building', 'ehrid');
	}

	public function muinas_heritagebuildings()
	{
		return $this->hasMany(MuinasHeritagebuilding::class, 'building', 'ehrid');
	}
}
