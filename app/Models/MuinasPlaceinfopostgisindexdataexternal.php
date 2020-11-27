<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfopostgisindexdataexternal
 * 
 * @property int $placeinfopostgisindexdata
 * @property int $external
 * @property int $place
 * @property string $table
 * @property Carbon|null $synced
 * 
 * @property MuinasPlaceinfopostgisindexdatum $muinas_placeinfopostgisindexdatum
 *
 * @package App\Models
 */
class MuinasPlaceinfopostgisindexdataexternal extends Model
{
	protected $table = 'muinas_placeinfopostgisindexdataexternal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfopostgisindexdata' => 'int',
		'external' => 'int',
		'place' => 'int'
	];

	protected $dates = [
		'synced'
	];

	protected $fillable = [
		'external',
		'table',
		'synced'
	];

	public function muinas_placeinfopostgisindexdatum()
	{
		return $this->belongsTo(MuinasPlaceinfopostgisindexdatum::class, 'placeinfopostgisindexdata');
	}
}
