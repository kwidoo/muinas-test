<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsinspectioncoordinate
 * 
 * @property int $id
 * @property int|null $snsinspection
 * @property string $name
 * @property float|null $x
 * @property float|null $y
 * @property float|null $lng
 * @property float|null $lat
 * @property string $status
 *
 * @package App\Models
 */
class MuinasSnsinspectioncoordinate extends Model
{
	protected $table = 'muinas_snsinspectioncoordinate';
	public $timestamps = false;

	protected $casts = [
		'snsinspection' => 'int',
		'x' => 'float',
		'y' => 'float',
		'lng' => 'float',
		'lat' => 'float'
	];

	protected $fillable = [
		'snsinspection',
		'name',
		'x',
		'y',
		'lng',
		'lat',
		'status'
	];
}
