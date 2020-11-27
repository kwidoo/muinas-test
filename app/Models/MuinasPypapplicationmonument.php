<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationmonument
 * 
 * @property int $id
 * @property int $pypapplication
 * @property string $addresstext
 * @property int $monument
 * @property int|null $address
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasMonument $muinas_monument
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasPypapplicationmonument extends Model
{
	protected $table = 'muinas_pypapplicationmonument';
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'monument' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'pypapplication',
		'addresstext',
		'monument',
		'address'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
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
