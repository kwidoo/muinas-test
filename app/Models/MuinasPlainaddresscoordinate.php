<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlainaddresscoordinate
 * 
 * @property string $county
 * @property string $parish
 * @property string $address
 * @property float $gpsx
 * @property float $gpsy
 *
 * @package App\Models
 */
class MuinasPlainaddresscoordinate extends Model
{
	protected $table = 'muinas_plainaddresscoordinates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gpsx' => 'float',
		'gpsy' => 'float'
	];

	protected $fillable = [
		'gpsx',
		'gpsy'
	];
}
