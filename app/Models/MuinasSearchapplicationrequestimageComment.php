<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestimageComment
 * 
 * @property int $searchapplicationrequest_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestimageComment extends Model
{
	protected $table = 'muinas_searchapplicationrequestimage_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest_comment' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];
}
