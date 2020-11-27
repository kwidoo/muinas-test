<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationcounty
 * 
 * @property int $pypapplication
 * @property int $county
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasAdsclassifier $muinas_adsclassifier
 *
 * @package App\Models
 */
class MuinasPypapplicationcounty extends Model
{
	protected $table = 'muinas_pypapplicationcounty';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'county' => 'int'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'county');
	}
}
