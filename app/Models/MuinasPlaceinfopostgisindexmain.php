<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgisindexmain
 * 
 * @property int $placeinfo
 * @property int $person
 * @property Carbon|null $synced
 * @property string|null $record
 * 
 * @property MuinasPerson $muinas_person
 * @property MuinasPlaceinfo $muinas_placeinfo
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgisindexmain extends Model
{
	protected $table = 'muinas_placeinfopostgisindexmain';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'synced'
	];

	protected $fillable = [
		'synced',
		'record'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}
}
