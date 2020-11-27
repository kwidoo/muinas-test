<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingdetail
 * 
 * @property int $id
 * @property int $evmbuilding
 * @property string $description
 * @property string|null $type
 * @property int $detail
 * @property int|null $state
 * @property Carbon|null $date
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasClassificator|null $muinas_classificator
 * @property Collection|MuinasEvmbuildingmapplace[] $muinas_evmbuildingmapplaces
 *
 * @package App\Models
 */
class MuinasEvmbuildingdetail extends Model
{
	protected $table = 'muinas_evmbuildingdetail';
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'detail' => 'int',
		'state' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'evmbuilding',
		'description',
		'type',
		'detail',
		'state',
		'date'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'state');
	}

	public function muinas_evmbuildingmapplaces()
	{
		return $this->hasMany(MuinasEvmbuildingmapplace::class, 'evmbuildingdetail');
	}
}
