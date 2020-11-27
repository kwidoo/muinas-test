<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactmapplacecoordinate
 * 
 * @property int $id
 * @property int $findacceptactmapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasFindacceptactmapplace $muinas_findacceptactmapplace
 *
 * @package App\Models
 */
class MuinasFindacceptactmapplacecoordinate extends Model
{
	protected $table = 'muinas_findacceptactmapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'findacceptactmapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'findacceptactmapplace',
		'lat',
		'lng'
	];

	public function muinas_findacceptactmapplace()
	{
		return $this->belongsTo(MuinasFindacceptactmapplace::class, 'findacceptactmapplace');
	}
}
