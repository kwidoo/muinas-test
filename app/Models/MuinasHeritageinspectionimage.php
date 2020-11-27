<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageinspectionimage
 * 
 * @property int $heritageinspection
 * @property int $imagebank
 * @property int $position
 * 
 * @property MuinasHeritageinspection $muinas_heritageinspection
 * @property MuinasImagebank $muinas_imagebank
 *
 * @package App\Models
 */
class MuinasHeritageinspectionimage extends Model
{
	protected $table = 'muinas_heritageinspectionimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'heritageinspection' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'position'
	];

	public function muinas_heritageinspection()
	{
		return $this->belongsTo(MuinasHeritageinspection::class, 'heritageinspection');
	}

	public function muinas_imagebank()
	{
		return $this->belongsTo(MuinasImagebank::class, 'imagebank');
	}
}
