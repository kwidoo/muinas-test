<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagebuilding
 * 
 * @property int $building
 * @property int $heritage
 * @property string $address
 * @property string $name
 * @property Carbon $created
 * @property bool|null $isheritage
 * @property int|null $buildingshapeshape
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasBuilding $muinas_building
 *
 * @package App\Models
 */
class MuinasHeritagebuilding extends Model
{
	protected $table = 'muinas_heritagebuilding';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'building' => 'int',
		'heritage' => 'int',
		'isheritage' => 'bool',
		'buildingshapeshape' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'address',
		'name',
		'created',
		'isheritage',
		'buildingshapeshape'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_building()
	{
		return $this->belongsTo(MuinasBuilding::class, 'building', 'ehrid');
	}
}
