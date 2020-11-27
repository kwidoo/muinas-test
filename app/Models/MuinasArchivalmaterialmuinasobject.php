<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasArchivalmaterialmuinasobject
 * 
 * @property int $muinasobject
 * @property int $archivalmaterial
 * @property int|null $address
 * 
 * @property MuinasMuinasobject $muinas_muinasobject
 * @property MuinasArchivalmaterial $muinas_archivalmaterial
 * @property MuinasAddress|null $muinas_address
 *
 * @package App\Models
 */
class MuinasArchivalmaterialmuinasobject extends Model
{
	protected $table = 'muinas_archivalmaterialmuinasobject';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'archivalmaterial' => 'int',
		'address' => 'int'
	];

	public function muinas_muinasobject()
	{
		return $this->belongsTo(MuinasMuinasobject::class, 'muinasobject');
	}

	public function muinas_archivalmaterial()
	{
		return $this->belongsTo(MuinasArchivalmaterial::class, 'archivalmaterial');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}
}
