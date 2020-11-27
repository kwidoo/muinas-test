<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchpermitextrafileComment
 * 
 * @property int $searchpermit_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasSearchpermitComment $muinas_searchpermit_comment
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasSearchpermitextrafileComment extends Model
{
	protected $table = 'muinas_searchpermitextrafile_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchpermit_comment' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];

	public function muinas_searchpermit_comment()
	{
		return $this->belongsTo(MuinasSearchpermitComment::class, 'searchpermit_comment');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
