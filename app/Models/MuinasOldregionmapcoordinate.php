<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOldregionmapcoordinate
 * 
 * @property int $id
 * @property int $oldregion
 * @property float $lat
 * @property float $lng
 * @property int $ring
 *
 * @package App\Models
 */
class MuinasOldregionmapcoordinate extends Model
{
	protected $table = 'muinas_oldregionmapcoordinate';
	public $timestamps = false;

	protected $casts = [
		'oldregion' => 'int',
		'lat' => 'float',
		'lng' => 'float',
		'ring' => 'int'
	];

	protected $fillable = [
		'oldregion',
		'lat',
		'lng',
		'ring'
	];
}
