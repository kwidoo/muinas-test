<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemcoordinate
 * 
 * @property int $id
 * @property int $snsitem
 * @property string $name
 * @property float|null $x
 * @property float|null $y
 * @property float $lng
 * @property float $lat
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsitemcoordinate extends Model
{
	protected $table = 'muinas_snsitemcoordinate';
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'x' => 'float',
		'y' => 'float',
		'lng' => 'float',
		'lat' => 'float'
	];

	protected $fillable = [
		'snsitem',
		'name',
		'x',
		'y',
		'lng',
		'lat',
		'status'
	];
}
