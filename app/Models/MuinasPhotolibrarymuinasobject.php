<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPhotolibrarymuinasobject
 * 
 * @property int $muinasobject
 * @property int $photolibrary
 * @property int $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasPhotolibrary $muinas_photolibrary
 * @property MuinasAddress $muinas_address
 *
 * @package App\Models
 */
class MuinasPhotolibrarymuinasobject extends Model
{
	protected $table = 'muinas_photolibrarymuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'photolibrary' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_photolibrary()
	{
		return $this->belongsTo(MuinasPhotolibrary::class, 'photolibrary');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
