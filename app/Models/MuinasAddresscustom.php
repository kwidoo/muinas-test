<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAddresscustom
 * 
 * @property int $id
 * @property int $county
 * @property int $parish
 * @property string $address
 * @property string $type
 *
 * @package App\Models
 */
class MuinasAddresscustom extends Model
{
	protected $table = 'muinas_addresscustom';
	public $timestamps = false;

	protected $casts = [
		'county' => 'int',
		'parish' => 'int'
	];

	protected $fillable = [
		'county',
		'parish',
		'address',
		'type'
	];
}
