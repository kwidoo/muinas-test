<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalmonumentowner
 * 
 * @property int $id
 * @property int $approval
 * @property int|null $ownerperson
 *
 * @package App\Models
 */
class MuinasApprovalmonumentowner extends Model
{
	protected $table = 'muinas_approvalmonumentowner';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'ownerperson' => 'int'
	];

	protected $fillable = [
		'approval',
		'ownerperson'
	];
}
