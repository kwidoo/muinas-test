<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPreceptmuinasobject
 * 
 * @property int $muinasobject
 * @property int $precept
 * @property int $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasPrecept $muinas_precept
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasPreceptmuinasobject extends Model
{
	protected $table = 'muinas_preceptmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'precept' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_precept()
	{
		return $this->belongsTo(MuinasPrecept::class, 'precept');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
