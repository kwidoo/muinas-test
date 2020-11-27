<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryimage
 * 
 * @property int $wreckregistry
 * @property int $imagebank
 * @property string $status
 * @property int $position
 *
 * @package App\Models
 */
class MuinasWreckregistryimage extends Model
{
	protected $table = 'muinas_wreckregistryimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wreckregistry' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'status',
		'position'
	];
}
