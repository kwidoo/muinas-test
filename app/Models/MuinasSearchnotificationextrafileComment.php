<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationextrafileComment
 * 
 * @property int $searchnotification_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasSearchnotificationComment $muinas_searchnotification_comment
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasSearchnotificationextrafileComment extends Model
{
	protected $table = 'muinas_searchnotificationextrafile_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchnotification_comment' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];

	public function muinas_searchnotification_comment()
	{
		return $this->belongsTo(MuinasSearchnotificationComment::class, 'searchnotification_comment');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
