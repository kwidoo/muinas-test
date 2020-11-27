<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsclassifiercoordinate
 * 
 * @property int $id
 * @property int $adsclassifier
 * @property float $lat
 * @property float $lng
 * @property int $ring
 *
 * @package App\Models
 */
class MuinasAdsclassifiercoordinate extends Model
{
	protected $table = 'muinas_adsclassifiercoordinate';
	public $timestamps = false;

	protected $casts = [
		'adsclassifier' => 'int',
		'lat' => 'float',
		'lng' => 'float',
		'ring' => 'int'
	];

	protected $fillable = [
		'adsclassifier',
		'lat',
		'lng',
		'ring'
	];
}
