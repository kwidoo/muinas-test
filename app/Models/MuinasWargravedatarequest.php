<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargravedatarequest
 * 
 * @property int $id
 * @property int|null $wargrave
 * @property int|null $wargraveperson
 * @property string $pcode
 * @property string $name
 * @property string $email
 * @property string $text
 * @property string $status
 * @property Carbon $datetime
 * @property string $ip
 * @property string $session
 * @property string $filterdata
 * @property Carbon|null $answered
 * @property string $answer
 * @property int|null $answerer
 *
 * @package App\Models
 */
class MuinasWargravedatarequest extends Model
{
	protected $table = 'muinas_wargravedatarequest';
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int',
		'wargraveperson' => 'int',
		'answerer' => 'int'
	];

	protected $dates = [
		'datetime',
		'answered'
	];

	protected $fillable = [
		'wargrave',
		'wargraveperson',
		'pcode',
		'name',
		'email',
		'text',
		'status',
		'datetime',
		'ip',
		'session',
		'filterdata',
		'answered',
		'answer',
		'answerer'
	];
}
