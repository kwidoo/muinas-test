<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitmonumentowner
 * 
 * @property int $id
 * @property int $workpermit
 * @property string|null $name
 * @property string|null $email
 * @property string|null $code
 * @property string|null $phone
 * @property int|null $ownerperson
 *
 * @package App\Models
 */
class MuinasWorkpermitmonumentowner extends Model
{
	protected $table = 'muinas_workpermitmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'workpermit',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];
}
