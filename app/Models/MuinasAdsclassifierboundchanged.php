<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsclassifierboundchanged
 * 
 * @property int $adsclassifier
 * @property string $class
 * @property string $field
 * @property Carbon $created
 * @property Carbon|null $fixed
 * @property int|null $person
 * @property int|null $newvalue
 *
 * @package App\Models
 */
class MuinasAdsclassifierboundchanged extends Model
{
	protected $table = 'muinas_adsclassifierboundchanged';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adsclassifier' => 'int',
		'person' => 'int',
		'newvalue' => 'int'
	];

	protected $dates = [
		'created',
		'fixed'
	];

	protected $fillable = [
		'created',
		'fixed',
		'person',
		'newvalue'
	];
}
