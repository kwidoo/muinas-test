<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuildingownerperson
 * 
 * @property int $evmbuilding
 * @property int $ownerperson
 * 
 * @property MuinasEvmbuilding $muinas_evmbuilding
 * @property MuinasOwnerperson $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasEvmbuildingownerperson extends Model
{
	protected $table = 'muinas_evmbuildingownerperson';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evmbuilding' => 'int',
		'ownerperson' => 'int'
	];

	public function muinas_evmbuilding()
	{
		return $this->belongsTo(MuinasEvmbuilding::class, 'evmbuilding');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
