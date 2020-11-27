<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEmergencysupportmuinasobject
 * 
 * @property int $muinasobject
 * @property int $emergencysupport
 * @property int $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasEmergencysupport $muinas_emergencysupport
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasEmergencysupportmuinasobject extends Model
{
	protected $table = 'muinas_emergencysupportmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'emergencysupport' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_emergencysupport()
	{
		return $this->belongsTo(MuinasEmergencysupport::class, 'emergencysupport');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
