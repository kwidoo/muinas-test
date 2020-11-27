<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationmuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int $grantapplication
 * @property int|null $address
 * 
 * @property MuinasAddress|null $muinas_address
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasMuinasobject $muinas_muinasobject
 *
 * @package App\Models
 */
class MuinasGrantapplicationmuinasobject extends Model
{
	protected $table = 'muinas_grantapplicationmuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'grantapplication' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'grantapplication',
		'address'
	];

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}
}
