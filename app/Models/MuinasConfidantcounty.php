<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasConfidantcounty
 * 
 * @property int $confidant
 * @property int $county
 * 
 * @property MuinasAdsclassifier $muinas_adsclassifier
 * @property MuinasConfidant $muinas_confidant
 *
 * @package App\Models
 */
class MuinasConfidantcounty extends Model
{
	protected $table = 'muinas_confidantcounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'confidant' => 'int',
		'county' => 'int'
	];

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}

	public function muinas_confidant()
	{
		return $this->belongsTo(MuinasConfidant::class, 'confidant');
	}
}
