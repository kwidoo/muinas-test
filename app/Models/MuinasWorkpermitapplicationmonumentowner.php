<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationmonumentowner
 * 
 * @property int $id
 * @property int $workpermitapplication
 * @property string|null $name
 * @property string|null $email
 * @property string|null $code
 * @property string|null $phone
 * @property int|null $ownerperson
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationmonumentowner extends Model
{
	protected $table = 'muinas_workpermitapplicationmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'workpermitapplication',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];
}
