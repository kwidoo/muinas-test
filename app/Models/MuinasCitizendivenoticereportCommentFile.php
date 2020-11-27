<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportCommentFile
 * 
 * @property int $id
 * @property int $filebank
 * @property int $citizendivenoticereport_comment
 * @property string $title
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportCommentFile extends Model
{
	protected $table = 'muinas_citizendivenoticereport_comment_files';
	public $timestamps = false;

	protected $casts = [
		'filebank' => 'int',
		'citizendivenoticereport_comment' => 'int'
	];

	protected $fillable = [
		'filebank',
		'citizendivenoticereport_comment',
		'title'
	];
}
