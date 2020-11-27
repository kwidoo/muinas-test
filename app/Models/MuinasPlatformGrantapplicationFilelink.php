<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlatformGrantapplicationFilelink
 * 
 * @property int $id
 * @property string|null $type
 * @property int $fk
 * @property string|null $key
 * @property Carbon $created
 * @property Carbon $expires
 *
 * @package App\Models
 */
class MuinasPlatformGrantapplicationFilelink extends Model
{
	protected $table = 'muinas_platform_grantapplication_filelink';
	public $timestamps = false;

	protected $casts = [
		'fk' => 'int'
	];

	protected $dates = [
		'created',
		'expires'
	];

	protected $fillable = [
		'type',
		'fk',
		'key',
		'created',
		'expires'
	];
}
