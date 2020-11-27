<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisocounty
 * 
 * @property int $proviso
 * @property int $county
 * 
 * @property MuinasProviso $muinas_proviso
 * @property MuinasAdsclassifier $muinas_adsclassifier
 *
 * @package App\Models
 */
class MuinasProvisocounty extends Model
{
	protected $table = 'muinas_provisocounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'county' => 'int'
	];

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'proviso');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}
}
