<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentcatastralunitaddress
 * 
 * @property int $catastralunit
 * @property int $address
 *
 * @package App\Models
 */
class MuinasMonumentcatastralunitaddress extends Model
{
	protected $table = 'muinas_monumentcatastralunitaddress';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'catastralunit' => 'int',
		'address' => 'int'
	];
}
