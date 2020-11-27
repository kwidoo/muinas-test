<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $approval_comment
 * @property string|null $title
 * @property int|null $type
 *
 * @package App\Models
 */
class MuinasApprovalCommentFile extends Model
{
	protected $table = 'muinas_approval_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'approval_comment' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'filebank',
		'approval_comment',
		'title',
		'type'
	];
}
