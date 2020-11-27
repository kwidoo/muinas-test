<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationreissue
 * 
 * @property int $id
 * @property int $compensationapplication
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 *
 * @package App\Models
 */
class MuinasCompensationapplicationreissue extends Model
{
	protected $table = 'muinas_compensationapplicationreissue';
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'compensationapplication',
		'issuer',
		'person',
		'date'
	];
}
