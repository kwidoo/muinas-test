<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagemapplacecoordinate
 * 
 * @property int $id
 * @property int $heritagemapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasHeritagemapplace $muinas_heritagemapplace
 *
 * @package App\Models
 */
class MuinasHeritagemapplacecoordinate extends Model
{
	protected $table = 'muinas_heritagemapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'heritagemapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'heritagemapplace',
		'lat',
		'lng'
	];

	public function muinas_heritagemapplace()
	{
		return $this->belongsTo(MuinasHeritagemapplace::class, 'heritagemapplace');
	}
}
