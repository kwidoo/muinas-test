<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationmonument
 * 
 * @property int $id
 * @property int $provisoapplication
 * @property string $addresstext
 * @property int $monument
 * @property int|null $address
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasMonument $muinas_monument
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasProvisoapplicationmonument extends Model
{
	protected $table = 'muinas_provisoapplicationmonument';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'monument' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'provisoapplication',
		'addresstext',
		'monument',
		'address'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
