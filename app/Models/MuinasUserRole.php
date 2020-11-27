<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasUserRole
 * 
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * 
 * @property MuinasRole $muinas_role
 *
 * @package App\Models
 */
class MuinasUserRole extends Model
{
	protected $table = 'muinas_user_roles';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'role_id'
	];

	public function muinas_role()
	{
		return $this->belongsTo(MuinasRole::class, 'role_id');
	}
}
