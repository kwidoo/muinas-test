<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlainaddressnotfound
 * 
 * @property string $county
 * @property string $parish
 * @property string $address
 * @property string $entity
 * @property int $pk
 *
 * @package App\Models
 */
class MuinasPlainaddressnotfound extends Model
{
	protected $table = 'muinas_plainaddressnotfound';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int'
	];
}
