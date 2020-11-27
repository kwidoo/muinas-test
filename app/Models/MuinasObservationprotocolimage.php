<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocolimage
 * 
 * @property int $observationprotocol
 * @property int $imagebank
 * @property int $position
 * @property string|null $author
 * @property Carbon|null $created
 * @property string|null $description
 * 
 * @property MuinasObservationprotocol $muinas_observationprotocol
 * @property MuinasImagebank $muinas_imagebank
 *
 * @package App\Models
 */
class MuinasObservationprotocolimage extends Model
{
	protected $table = 'muinas_observationprotocolimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'observationprotocol' => 'int',
		'imagebank' => 'int',
		'position' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'position',
		'author',
		'created',
		'description'
	];

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}

	public function muinas_imagebank()
	{
		return $this->belongsTo(MuinasImagebank::class, 'imagebank');
	}
}
