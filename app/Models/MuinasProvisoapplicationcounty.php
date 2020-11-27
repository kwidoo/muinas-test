<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationcounty
 * 
 * @property int $provisoapplication
 * @property int $county
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasAdsclassifier $muinas_adsclassifier
 *
 * @package App\Models
 */
class MuinasProvisoapplicationcounty extends Model
{
	protected $table = 'muinas_provisoapplicationcounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'county' => 'int'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}
}
