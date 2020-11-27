<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRkvrobjectelement
 * 
 * @property int $id
 * @property string $rkvrobject
 * @property string $ehrcode
 * @property string $address
 * @property string $adsoid
 * @property string $type
 * @property string $name
 * @property string $unit
 *
 * @package App\Models
 */
class MuinasRkvrobjectelement extends Model
{
	protected $table = 'muinas_rkvrobjectelement';
	public $timestamps = false;

	protected $fillable = [
		'rkvrobject',
		'ehrcode',
		'address',
		'adsoid',
		'type',
		'name',
		'unit'
	];
}
