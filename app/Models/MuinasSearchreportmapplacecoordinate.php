<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportmapplacecoordinate
 * 
 * @property int $id
 * @property int $searchreportmapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasSearchreportmapplace $muinas_searchreportmapplace
 *
 * @package App\Models
 */
class MuinasSearchreportmapplacecoordinate extends Model
{
	protected $table = 'muinas_searchreportmapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'searchreportmapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'searchreportmapplace',
		'lat',
		'lng'
	];

	public function muinas_searchreportmapplace()
	{
		return $this->belongsTo(MuinasSearchreportmapplace::class, 'searchreportmapplace');
	}
}
