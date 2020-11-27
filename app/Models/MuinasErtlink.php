<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasErtlink
 * 
 * @property int $id
 * @property string $name
 * @property string $link
 * @property Carbon $created
 * @property string $status
 *
 * @package App\Models
 */
class MuinasErtlink extends Model
{
	protected $table = 'muinas_ertlink';
	public $timestamps = false;

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'name',
		'link',
		'created',
		'status'
	];
}
