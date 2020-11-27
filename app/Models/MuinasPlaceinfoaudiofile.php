<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoaudiofile
 * 
 * @property int $placeinfo
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPlaceinfoaudiofile extends Model
{
	protected $table = 'muinas_placeinfoaudiofile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
