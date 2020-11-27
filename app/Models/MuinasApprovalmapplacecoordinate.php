<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalmapplacecoordinate
 * 
 * @property int $id
 * @property int $approvalmapplace
 * @property float $lat
 * @property float $lng
 *
 * @package App\Models
 */
class MuinasApprovalmapplacecoordinate extends Model
{
	protected $table = 'muinas_approvalmapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'approvalmapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'approvalmapplace',
		'lat',
		'lng'
	];
}
