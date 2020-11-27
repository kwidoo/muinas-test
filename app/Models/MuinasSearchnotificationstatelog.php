<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationstatelog
 * 
 * @property int $id
 * @property int $searchnotification
 * @property string $state
 * @property string $name
 * @property string $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasSearchnotificationstatelog extends Model
{
	protected $table = 'muinas_searchnotificationstatelog';
	public $timestamps = false;

	protected $casts = [
		'searchnotification' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchnotification',
		'state',
		'name',
		'message',
		'created'
	];
}
