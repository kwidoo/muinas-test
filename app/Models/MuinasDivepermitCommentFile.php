<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivepermitCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $divepermit_comment
 * @property string $title
 *
 * @package App\Models
 */
class MuinasDivepermitCommentFile extends Model
{
	protected $table = 'muinas_divepermit_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'divepermit_comment' => 'int'
	];

	protected $fillable = [
		'filebank',
		'divepermit_comment',
		'title'
	];
}
