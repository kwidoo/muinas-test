<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationinternalnote
 * 
 * @property int $id
 * @property int|null $grantapplication
 * @property string|null $message
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasGrantapplicationinternalnote extends Model
{
	protected $table = 'muinas_grantapplicationinternalnotes';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'grantapplication',
		'message',
		'person',
		'created'
	];
}
