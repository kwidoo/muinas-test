<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingmapplace
 * 
 * @property int $id
 * @property int $evmbuilding
 * @property string $title
 * @property int|null $evmbuildingdetail
 * @property string|null $type
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasEvmbuildingdetail|null $muinas_evmbuildingdetail
 * @property Collection|MuinasEvmbuildingmapplacecoordinate[] $muinas_evmbuildingmapplacecoordinates
 *
 * @package App\Models
 */
class MuinasEvmbuildingmapplace extends Model
{
	protected $table = 'muinas_evmbuildingmapplace';
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'evmbuildingdetail' => 'int'
	];

	protected $fillable = [
		'evmbuilding',
		'title',
		'evmbuildingdetail',
		'type'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_evmbuildingdetail()
	{
		return $this->belongsTo(MuinasEvmbuildingdetail::class, 'evmbuildingdetail');
	}

	public function muinas_evmbuildingmapplacecoordinates()
	{
		return $this->hasMany(MuinasEvmbuildingmapplacecoordinate::class, 'evmbuildingmapplace');
	}
}
