<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasUser
 * 
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string $lang
 * @property string|null $type
 * @property string|null $status
 * @property string|null $cookie
 * @property Carbon|null $cookieexpire
 * @property Carbon|null $passwordset
 * @property string|null $usertype
 * @property bool|null $automaticlogin
 *
 * @package App\Models
 */
class MuinasUser extends Model
{
	protected $table = 'muinas_user';
	public $timestamps = false;

	protected $casts = [
		'automaticlogin' => 'bool'
	];

	protected $dates = [
		'cookieexpire',
		'passwordset'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'lang',
		'type',
		'status',
		'cookie',
		'cookieexpire',
		'passwordset',
		'usertype',
		'automaticlogin'
	];
}
