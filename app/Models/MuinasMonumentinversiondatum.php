<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinversiondatum
 * 
 * @property int $monument
 * @property string $field
 * @property string $data
 *
 * @package App\Models
 */
class MuinasMonumentinversiondatum extends Model
{
	protected $table = 'muinas_monumentinversiondata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int'
	];

	protected $fillable = [
		'monument',
		'field',
		'data'
	];
}
