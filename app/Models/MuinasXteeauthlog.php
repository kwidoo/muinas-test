<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasXteeauthlog
 * 
 * @property int $id
 * @property string $accesscode
 * @property int $company
 * @property Carbon $created
 * @property Carbon|null $accessed
 * @property string|null $citizencode
 *
 * @package App\Models
 */
class MuinasXteeauthlog extends Model
{
	protected $table = 'muinas_xteeauthlog';
	public $timestamps = false;

	protected $casts = [
		'company' => 'int'
	];

	protected $dates = [
		'created',
		'accessed'
	];

	protected $fillable = [
		'accesscode',
		'company',
		'created',
		'accessed',
		'citizencode'
	];
}
