<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationcounty
 * 
 * @property int $grantapplication
 * @property int $county
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasAdsclassifier $muinas_adsclassifier
 *
 * @package App\Models
 */
class MuinasGrantapplicationcounty extends Model
{
	protected $table = 'muinas_grantapplicationcounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'county' => 'int'
	];

	protected $guarded = [];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}
}
