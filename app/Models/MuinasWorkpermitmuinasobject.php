<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int|null $workpermit
 * @property int|null $address
 * @property string|null $coordinates
 *
 * @package App\Models
 */
class MuinasWorkpermitmuinasobject extends Model
{
	protected $table = 'muinas_workpermitmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'workpermit' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'workpermit',
		'address',
		'coordinates'
	];
}
