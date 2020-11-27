<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgissyncqueue
 * 
 * @property int $placeinfo
 * @property string $synctype
 * @property string $syncdata
 * @property Carbon $queued
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgissyncqueue extends Model
{
	protected $table = 'muinas_placeinfopostgissyncqueue';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int'
	];

	protected $dates = [
		'queued'
	];

	protected $fillable = [
		'placeinfo',
		'synctype',
		'syncdata',
		'queued'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}
}
