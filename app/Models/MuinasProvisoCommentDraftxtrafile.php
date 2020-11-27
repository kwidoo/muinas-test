<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoCommentDraftxtrafile
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
 * @property MuinasProvisoDraftcomment $muinas_proviso_draftcomment
 *
 * @package App\Models
 */
class MuinasProvisoCommentDraftxtrafile extends Model
{
	protected $table = 'muinas_proviso_comment_draftxtrafile';
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

	public function muinas_proviso_draftcomment()
	{
		return $this->belongsTo(MuinasProvisoDraftcomment::class, 'proviso_comment');
	}
}
