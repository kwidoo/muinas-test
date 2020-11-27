<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcatastralunitowner
 * 
 * @property int $catastralunit
 * @property int $owner
 *
 * @package App\Models
 */
class MuinasMonumentcatastralunitowner extends Model
{
	protected $table = 'muinas_monumentcatastralunitowner';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'catastralunit' => 'int',
		'owner' => 'int'
	];
}
