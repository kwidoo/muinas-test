<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagecatastralunitowner
 * 
 * @property int $catastralunit
 * @property int $owner
 *
 * @package App\Models
 */
class MuinasHeritagecatastralunitowner extends Model
{
	protected $table = 'muinas_heritagecatastralunitowner';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'catastralunit' => 'int',
		'owner' => 'int'
	];
}
