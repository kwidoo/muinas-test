<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemaja
 * 
 * @property int $id
 * @property string $village
 * @property Carbon|null $inventory_date
 * @property string $cadastralcode
 * @property float|null $area
 * @property string $interviewed
 * @property string $farm
 * @property string $inventoryer
 * @property string $owner
 * @property string $contact
 * @property string $acquire_date
 * @property string $protection
 * @property string $farmyard_description
 * @property string $owner_wishes
 * @property string $archive
 * @property string $well
 * @property string $inclosure
 * @property string $landscaping
 * @property string $routes
 * @property string $surroundings
 * @property float|null $length
 * @property float|null $width
 * @property float|null $height
 * @property int|null $buildyear
 * @property int|null $buildyearend
 * @property string $buildyearmethod
 * @property string $rehemaja_description
 * @property string $status
 * @property int $county
 * @property int $parish
 * @property int $acquire_method
 * @property int $type
 * @property int $current_usage
 * @property int|null $monument
 * @property string $inventory_state
 * @property int $person
 * @property string $ehrcode
 * @property float|null $lng
 * @property float|null $lat
 * 
 * @property Collection|MuinasRehemajamapplace[] $muinas_rehemajamapplaces
 *
 * @package App\Models
 */
class MuinasRehemaja extends Model
{
	protected $table = 'muinas_rehemaja';
	public $timestamps = false;

	protected $casts = [
		'area' => 'float',
		'length' => 'float',
		'width' => 'float',
		'height' => 'float',
		'buildyear' => 'int',
		'buildyearend' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'acquire_method' => 'int',
		'type' => 'int',
		'current_usage' => 'int',
		'monument' => 'int',
		'person' => 'int',
		'lng' => 'float',
		'lat' => 'float'
	];

	protected $dates = [
		'inventory_date'
	];

	protected $fillable = [
		'village',
		'inventory_date',
		'cadastralcode',
		'area',
		'interviewed',
		'farm',
		'inventoryer',
		'owner',
		'contact',
		'acquire_date',
		'protection',
		'farmyard_description',
		'owner_wishes',
		'archive',
		'well',
		'inclosure',
		'landscaping',
		'routes',
		'surroundings',
		'length',
		'width',
		'height',
		'buildyear',
		'buildyearend',
		'buildyearmethod',
		'rehemaja_description',
		'status',
		'county',
		'parish',
		'acquire_method',
		'type',
		'current_usage',
		'monument',
		'inventory_state',
		'person',
		'ehrcode',
		'lng',
		'lat'
	];

	public function muinas_rehemajamapplaces()
	{
		return $this->hasMany(MuinasRehemajamapplace::class, 'rehemaja');
	}
}
