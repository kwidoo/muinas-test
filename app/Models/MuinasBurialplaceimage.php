<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasBurialplaceimage
 * 
 * @property int $burialplace
 * @property int $imagebank
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasBurialplaceimage extends Model
{
	protected $table = 'muinas_burialplaceimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'burialplace' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'burialplace',
		'imagebank',
		'description',
		'position'
	];
}
