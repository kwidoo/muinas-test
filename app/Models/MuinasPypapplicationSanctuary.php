<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationSanctuary
 * 
 * @property int $pypapplication
 * @property string $name
 * @property string $address
 * @property int|null $county
 * @property int|null $parish
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 *
 * @package App\Models
 */
class MuinasPypapplicationSanctuary extends Model
{
	protected $table = 'muinas_pypapplication_sanctuary';
	protected $primaryKey = 'pypapplication';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'county',
		'parish'
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
