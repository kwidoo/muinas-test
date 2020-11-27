<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentmembership
 * 
 * @property int $id
 * @property int $monument
 * @property int $member
 * @property string $type
 *
 * @package App\Models
 */
class MuinasMonumentmembership extends Model
{
	protected $table = 'muinas_monumentmembership';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'member' => 'int'
	];

	protected $fillable = [
		'monument',
		'member',
		'type'
	];
}
