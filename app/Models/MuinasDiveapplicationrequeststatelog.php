<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequeststatelog
 * 
 * @property int $id
 * @property int $diveapplicationrequest
 * @property string $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequeststatelog extends Model
{
	protected $table = 'muinas_diveapplicationrequeststatelog';
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'diveapplicationrequest',
		'state',
		'name',
		'message',
		'created'
	];
}
