<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestreissue
 * 
 * @property int $id
 * @property int $diveapplicationrequest
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestreissue extends Model
{
	protected $table = 'muinas_diveapplicationrequestreissue';
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'diveapplicationrequest',
		'issuer',
		'person',
		'date'
	];
}
