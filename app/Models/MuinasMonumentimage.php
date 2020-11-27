<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentimage
 * 
 * @property int $monument
 * @property int $imagebank
 * @property bool|null $classified
 * @property string|null $description
 * @property int|null $position
 *
 * @package App\Models
 */
class MuinasMonumentimage extends Model
{
	protected $table = 'muinas_monumentimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'imagebank' => 'int',
		'classified' => 'bool',
		'position' => 'int'
	];

	protected $fillable = [
		'classified',
		'description',
		'position'
	];
}
