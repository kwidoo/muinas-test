<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalDraft
 * 
 * @property int $id
 * @property int $coordination_id
 * @property int $person_id
 * @property string|null $receivers
 * @property string $status
 * @property string|null $message
 * @property string|null $reason
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasApprovalDraft extends Model
{
	protected $table = 'muinas_approval_draft';
	public $timestamps = false;

	protected $casts = [
		'coordination_id' => 'int',
		'person_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'coordination_id',
		'person_id',
		'receivers',
		'status',
		'message',
		'reason',
		'created'
	];
}
