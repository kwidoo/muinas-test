<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalMonument
 * 
 * @property int $id
 * @property int $approval
 * @property int $monument
 * @property int $ownerperson
 *
 * @package App\Models
 */
class MuinasApprovalMonument extends Model
{
	protected $table = 'muinas_approval_monument';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'monument' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'approval',
		'monument',
		'ownerperson'
	];
}
