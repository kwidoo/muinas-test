<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisointernalnotice
 * 
 * @property int $id
 * @property int|null $proviso
 * @property string|null $notice
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasProvisointernalnotice extends Model
{
	protected $table = 'muinas_provisointernalnotices';
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'proviso',
		'notice',
		'person',
		'created'
	];
}
