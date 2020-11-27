<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationreissue
 * 
 * @property int $id
 * @property int $provisoapplication
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasProvisoapplicationreissue extends Model
{
	protected $table = 'muinas_provisoapplicationreissue';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'provisoapplication',
		'issuer',
		'person',
		'date'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
