<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinspectionimage
 * 
 * @property int $monumentinspection
 * @property int $imagebank
 * @property int $position
 *
 * @package App\Models
 */
class MuinasMonumentinspectionimage extends Model
{
	protected $table = 'muinas_monumentinspectionimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monumentinspection' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'position'
	];
}
