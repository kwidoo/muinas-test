<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSeizedculturalpropertyimage
 * 
 * @property int $seizedculturalproperty
 * @property int $imagebank
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasSeizedculturalpropertyimage extends Model
{
	protected $table = 'muinas_seizedculturalpropertyimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'seizedculturalproperty' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'seizedculturalproperty',
		'imagebank',
		'description',
		'position'
	];
}
