<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisomuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int $proviso
 * @property int|null $address
 * 
 * @property MuinasAddress|null $muinas_address
 * @property MuinasMuinasobject $muinas_muinasobject
 *
 * @package App\Models
 */
class MuinasProvisomuinasobject extends Model
{
	protected $table = 'muinas_provisomuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'proviso' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'proviso',
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
}
