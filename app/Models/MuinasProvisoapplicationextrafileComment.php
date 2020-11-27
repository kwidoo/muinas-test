<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationextrafileComment
 * 
 * @property int $provisoapplication_comment
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property int|null $comment_id
 * 
 * @property MuinasProvisoapplicationComment $muinas_provisoapplication_comment
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasProvisoapplicationextrafileComment extends Model
{
	protected $table = 'muinas_provisoapplicationextrafile_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'provisoapplication_comment' => 'int',
		'filebank' => 'int',
		'status' => 'bool',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'title',
		'status',
		'comment_id'
	];

	public function muinas_provisoapplication_comment()
	{
		return $this->belongsTo(MuinasProvisoapplicationComment::class, 'provisoapplication_comment');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
