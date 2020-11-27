<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $diveapplication_comment
 * @property string $title
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestCommentFile extends Model
{
	protected $table = 'muinas_diveapplicationrequest_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'diveapplication_comment' => 'int'
	];

	protected $fillable = [
		'filebank',
		'diveapplication_comment',
		'title'
	];
}
