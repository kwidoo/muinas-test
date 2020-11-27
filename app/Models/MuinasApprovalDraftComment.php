<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalDraftComment
 * 
 * @property int $id
 * @property int $draft_id
 * @property int|null $person_id
 * @property int|null $ownerperson_id
 * @property string|null $message
 * @property Carbon $created
 *
 * @package App\Models
 */
class MuinasApprovalDraftComment extends Model
{
	protected $table = 'muinas_approval_draft_comments';
	public $timestamps = false;

	protected $casts = [
		'draft_id' => 'int',
		'person_id' => 'int',
		'ownerperson_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'draft_id',
		'person_id',
		'ownerperson_id',
		'message',
		'created'
	];
}
