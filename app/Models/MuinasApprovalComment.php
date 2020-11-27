<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalComment
 * 
 * @property int $id
 * @property int|null $coordination_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasApprovalComment extends Model
{
	protected $table = 'muinas_approval_comments';
	public $timestamps = false;

	protected $casts = [
		'coordination_id' => 'int',
		'person_id' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'coordination_id',
		'person_id',
		'message',
		'created',
		'type',
		'receivers'
	];
}
