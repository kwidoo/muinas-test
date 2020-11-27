<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoindex
 * 
 * @property int $placeinfo
 * @property string $field
 * @property string $value
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 *
 * @package App\Models
 */
class MuinasPlaceinfoindex extends Model
{
	protected $table = 'muinas_placeinfoindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int'
	];

	protected $fillable = [
		'value'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}
}
