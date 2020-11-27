<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int|null $workpermitapplication
 * @property int|null $address
 * @property string|null $coordinates
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationmuinasobject extends Model
{
	protected $table = 'muinas_workpermitapplicationmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'workpermitapplication' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'workpermitapplication',
		'address',
		'coordinates'
	];
}
