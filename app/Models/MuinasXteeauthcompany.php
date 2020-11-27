<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasXteeauthcompany
 * 
 * @property int $id
 * @property int $user
 * @property string $name
 * @property string $code
 *
 * @package App\Models
 */
class MuinasXteeauthcompany extends Model
{
	protected $table = 'muinas_xteeauthcompany';
	public $timestamps = false;

	protected $casts = [
		'user' => 'int'
	];

	protected $fillable = [
		'user',
		'name',
		'code'
	];
}
