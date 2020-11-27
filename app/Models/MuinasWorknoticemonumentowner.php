<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticemonumentowner
 * 
 * @property int $id
 * @property int $worknotice
 * @property string|null $name
 * @property string|null $email
 * @property string|null $code
 * @property string|null $phone
 * @property int|null $ownerperson
 *
 * @package App\Models
 */
class MuinasWorknoticemonumentowner extends Model
{
	protected $table = 'muinas_worknoticemonumentowner';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'worknotice',
		'name',
		'email',
		'code',
		'phone',
		'ownerperson'
	];
}
