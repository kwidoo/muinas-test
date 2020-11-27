<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreissue
 * 
 * @property int $id
 * @property int $pypapplication
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasPypapplicationreissue extends Model
{
	protected $table = 'muinas_pypapplicationreissue';
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'pypapplication',
		'issuer',
		'person',
		'date'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
