<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinversionaddress
 * 
 * @property int $id
 * @property int $monument
 * @property int $address
 * @property int $file
 *
 * @package App\Models
 */
class MuinasMonumentinversionaddress extends Model
{
	protected $table = 'muinas_monumentinversionaddress';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'address' => 'int',
		'file' => 'int'
	];

	protected $fillable = [
		'monument',
		'address',
		'file'
	];
}
