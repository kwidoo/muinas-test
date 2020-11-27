<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationstatelog
 * 
 * @property int $id
 * @property int $workpermitapplication
 * @property string|null $state
 * @property string|null $name
 * @property string|null $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationstatelog extends Model
{
	protected $table = 'muinas_workpermitapplicationstatelog';
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'workpermitapplication',
		'state',
		'name',
		'message',
		'created'
	];
}
