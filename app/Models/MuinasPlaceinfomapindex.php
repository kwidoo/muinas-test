<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfomapindex
 * 
 * @property int $placeinfo
 * @property float $x
 * @property float $y
 * @property string|null $jsoncache
 * @property float|null $l_est_x
 * @property float|null $l_est_y
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 *
 * @package App\Models
 */
class MuinasPlaceinfomapindex extends Model
{
	protected $table = 'muinas_placeinfomapindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'x' => 'float',
		'y' => 'float',
		'l_est_x' => 'float',
		'l_est_y' => 'float'
	];

	protected $fillable = [
		'placeinfo',
		'x',
		'y',
		'jsoncache',
		'l_est_x',
		'l_est_y'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}
}
