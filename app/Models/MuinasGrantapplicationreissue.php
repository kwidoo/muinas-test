<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreissue
 * 
 * @property int $id
 * @property int $grantapplication
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasGrantapplicationreissue extends Model
{
	protected $table = 'muinas_grantapplicationreissue';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'grantapplication',
		'issuer',
		'person',
		'date'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
