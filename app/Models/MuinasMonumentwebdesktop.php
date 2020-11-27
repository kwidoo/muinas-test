<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentwebdesktop
 * 
 * @property int $monument
 * @property int $webdesktop
 * @property string $name
 *
 * @package App\Models
 */
class MuinasMonumentwebdesktop extends Model
{
	protected $table = 'muinas_monumentwebdesktop';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'webdesktop' => 'int'
	];

	protected $fillable = [
		'name'
	];
}
