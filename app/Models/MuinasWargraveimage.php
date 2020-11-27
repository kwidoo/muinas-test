<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargraveimage
 * 
 * @property int $wargrave
 * @property int $imagebank
 * @property string $description
 * @property int $position
 *
 * @package App\Models
 */
class MuinasWargraveimage extends Model
{
	protected $table = 'muinas_wargraveimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'description',
		'position'
	];
}
