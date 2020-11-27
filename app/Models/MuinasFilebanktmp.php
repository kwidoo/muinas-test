<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFilebanktmp
 * 
 * @property int $id
 * @property Carbon $created
 * @property Carbon|null $expires
 * @property int|null $user_id
 * @property string $user_authtype
 * @property string $name
 * @property int $size
 * @property string $mime
 * @property string $path
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasFilebanktmp extends Model
{
	protected $table = 'muinas_filebanktmp';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'size' => 'int'
	];

	protected $dates = [
		'created',
		'expires'
	];

	protected $fillable = [
		'created',
		'expires',
		'user_id',
		'user_authtype',
		'name',
		'size',
		'mime',
		'path',
		'type'
	];
}
