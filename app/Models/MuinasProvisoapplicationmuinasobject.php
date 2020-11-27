<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int $provisoapplication
 * @property int|null $address
 * 
 * @property MuinasAddress|null $muinas_address
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasProvisoapplication $muinas_provisoapplication
 *
 * @package App\Models
 */
class MuinasProvisoapplicationmuinasobject extends Model
{
	protected $table = 'muinas_provisoapplicationmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'provisoapplication' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'provisoapplication',
		'address'
	];

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}
}
