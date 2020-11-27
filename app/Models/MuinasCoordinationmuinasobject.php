<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationmuinasobject
 * 
 * @property int $muinasobject
 * @property int $coordination
 * @property int|null $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasCoordination $muinas_coordination
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasCoordinationmuinasobject extends Model
{
	protected $table = 'muinas_coordinationmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'coordination' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
