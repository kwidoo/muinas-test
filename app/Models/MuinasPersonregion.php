<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPersonregion
 * 
 * @property int $person
 * @property string $type
 * @property int $pk
 *
 * @package App\Models
 */
class MuinasPersonregion extends Model
{
	protected $table = 'muinas_personregion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person' => 'int',
		'pk' => 'int'
	];
}
