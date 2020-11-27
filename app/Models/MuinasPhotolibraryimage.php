<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPhotolibraryimage
 * 
 * @property int $photolibrary
 * @property int $imagebank
 * @property string $description
 * @property string $number
 * @property int $position
 *
 * @package App\Models
 */
class MuinasPhotolibraryimage extends Model
{
	protected $table = 'muinas_photolibraryimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'photolibrary' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'description',
		'number',
		'position'
	];
}
