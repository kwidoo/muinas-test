<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationstatedescription
 * 
 * @property int $provisoapplication
 * @property int $statedescription
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasClassificator $muinas_classificator
 *
 * @package App\Models
 */
class MuinasProvisoapplicationstatedescription extends Model
{
	protected $table = 'muinas_provisoapplicationstatedescription';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'statedescription' => 'int'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'statedescription');
	}
}
