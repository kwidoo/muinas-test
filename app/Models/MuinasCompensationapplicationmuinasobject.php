<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int $compensationapplication
 * @property int|null $address
 * 
 * @property MuinasAddress|null $muinas_address
 * @property MuinasCompensationapplication $muinas_compensationapplication
 * @property MuinasMuinasobject $muinas_muinasobject
 *
 * @package App\Models
 */
class MuinasCompensationapplicationmuinasobject extends Model
{
	protected $table = 'muinas_compensationapplicationmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'compensationapplication' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'compensationapplication',
		'address'
	];

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_compensationapplication()
	{
		return $this->belongsTo(MuinasCompensationapplication::class, 'compensationapplication');
	}

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}
}
