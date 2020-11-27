<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingoldlocation
 * 
 * @property int $evmbuilding
 * @property int $oldcounty
 * @property int|null $oldparish
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasEvmbuildingoldlocation extends Model
{
	protected $table = 'muinas_evmbuildingoldlocation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'oldcounty' => 'int',
		'oldparish' => 'int'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'oldparish');
	}
}
