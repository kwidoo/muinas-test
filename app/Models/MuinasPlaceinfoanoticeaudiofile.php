<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoanoticeaudiofile
 * 
 * @property int $placeinfoanotice
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasPlaceinfoanotice $muinas_placeinfoanotice
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPlaceinfoanoticeaudiofile extends Model
{
	protected $table = 'muinas_placeinfoanoticeaudiofile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfoanotice' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_placeinfoanotice()
	{
		return $this->belongsTo(MuinasPlaceinfoanotice::class, 'placeinfoanotice');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
