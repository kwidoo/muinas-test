<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenoticeCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $divenotice_comment
 * @property string $title
 *
 * @package App\Models
 */
class MuinasDivenoticeCommentFile extends Model
{
	protected $table = 'muinas_divenotice_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'divenotice_comment' => 'int'
	];

	protected $fillable = [
		'filebank',
		'divenotice_comment',
		'title'
	];
}
