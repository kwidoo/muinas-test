<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestextrafileComment
 * 
 * @property int $searchapplicationrequest_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasSearchapplicationrequestComment $muinas_searchapplicationrequest_comment
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestextrafileComment extends Model
{
	protected $table = 'muinas_searchapplicationrequestextrafile_comment';
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

	public function muinas_searchapplicationrequest_comment()
	{
		return $this->belongsTo(MuinasSearchapplicationrequestComment::class, 'searchapplicationrequest_comment');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
