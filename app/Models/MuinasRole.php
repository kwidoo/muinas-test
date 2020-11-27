<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRole
 * 
 * @property int $id
 * @property string $name
 * @property string|null $privs
 * @property string|null $status
 * @property Carbon $created
 * @property Carbon $updated
 * 
 * @property Collection|MuinasUserRole[] $muinas_user_roles
 *
 * @package App\Models
 */
class MuinasRole extends Model
{
	protected $table = 'muinas_roles';
	public $timestamps = false;

	protected $dates = [
		'created',
		'updated'
	];

	protected $fillable = [
		'name',
		'privs',
		'status',
		'created',
		'updated'
	];

	public function muinas_user_roles()
	{
		return $this->hasMany(MuinasUserRole::class, 'role_id');
	}
}
