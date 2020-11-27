<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationextrafileComment
 * 
 * @property int $grantapplication_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasGrantapplicationComment $muinas_grantapplication_comment
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasGrantapplicationextrafileComment extends Model
{
	protected $table = 'muinas_grantapplicationextrafile_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication_comment' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];

	public function muinas_grantapplication_comment()
	{
		return $this->belongsTo(MuinasGrantapplicationComment::class, 'grantapplication_comment');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
