<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagecatastralunitaddress
 * 
 * @property int $catastralunit
 * @property int $address
 *
 * @package App\Models
 */
class MuinasHeritagecatastralunitaddress extends Model
{
	protected $table = 'muinas_heritagecatastralunitaddress';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'catastralunit' => 'int',
		'address' => 'int'
	];
}
