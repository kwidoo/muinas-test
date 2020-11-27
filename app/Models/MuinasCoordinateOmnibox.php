<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinateOmnibox
 * 
 * @property int $id
 * @property string|null $request
 * @property string|null $parsed
 * @property string|null $errors
 * @property Carbon $stamp
 * @property int|null $user
 * @property string|null $site
 *
 * @package App\Models
 */
class MuinasCoordinateOmnibox extends Model
{
	protected $table = 'muinas_coordinate_omnibox';
	public $timestamps = false;

	protected $casts = [
		'user' => 'int'
	];

	protected $dates = [
		'stamp'
	];

	protected $fillable = [
		'request',
		'parsed',
		'errors',
		'stamp',
		'user',
		'site'
	];
}
