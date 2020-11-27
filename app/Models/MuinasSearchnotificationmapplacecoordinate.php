<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationmapplacecoordinate
 * 
 * @property int $id
 * @property int $searchnotificationmapplace
 * @property float $lat
 * @property float $lng
 *
 * @package App\Models
 */
class MuinasSearchnotificationmapplacecoordinate extends Model
{
	protected $table = 'muinas_searchnotificationmapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'searchnotificationmapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'searchnotificationmapplace',
		'lat',
		'lng'
	];
}
