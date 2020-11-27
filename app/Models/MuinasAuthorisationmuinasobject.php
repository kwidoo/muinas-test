<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationmuinasobject
 * 
 * @property int $muinasobject
 * @property int $authorisation
 * @property int|null $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasAuthorisation $muinas_authorisation
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasAuthorisationmuinasobject extends Model
{
	protected $table = 'muinas_authorisationmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'authorisation' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
