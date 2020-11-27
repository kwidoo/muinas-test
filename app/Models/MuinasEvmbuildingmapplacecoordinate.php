<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingmapplacecoordinate
 * 
 * @property int $id
 * @property int $evmbuildingmapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasEvmbuildingmapplace $muinas_evmbuildingmapplace
 *
 * @package App\Models
 */
class MuinasEvmbuildingmapplacecoordinate extends Model
{
	protected $table = 'muinas_evmbuildingmapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'evmbuildingmapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'evmbuildingmapplace',
		'lat',
		'lng'
	];

	public function muinas_evmbuildingmapplace()
	{
		return $this->belongsTo(MuinasEvmbuildingmapplace::class, 'evmbuildingmapplace');
	}
}
