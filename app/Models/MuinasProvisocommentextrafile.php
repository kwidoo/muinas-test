<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisocommentextrafile
 * 
 * @property int $proviso_comment
 * @property int $filebank
 * @property string|null $title
 * @property bool|null $type
 * @property int|null $comment_id
 * @property int|null $person
 * @property Carbon|null $created
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasProvisoComment $muinas_proviso_comment
 *
 * @package App\Models
 */
class MuinasProvisocommentextrafile extends Model
{
	protected $table = 'muinas_provisocommentextrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso_comment' => 'int',
		'filebank' => 'int',
		'type' => 'bool',
		'comment_id' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'comment_id',
		'person',
		'created'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_proviso_comment()
	{
		return $this->belongsTo(MuinasProvisoComment::class, 'proviso_comment');
	}
}
