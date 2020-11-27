<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalDraftCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $draft_comment
 * @property string|null $title
 * @property int|null $type
 *
 * @package App\Models
 */
class MuinasApprovalDraftCommentFile extends Model
{
	protected $table = 'muinas_approval_draft_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'draft_comment' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'filebank',
		'draft_comment',
		'title',
		'type'
	];
}
