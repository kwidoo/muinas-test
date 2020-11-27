<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceSpecialistsCommentExtrafile
 * 
 * @property int $licence_comment
 * @property int $filebank
 * @property string|null $title
 * @property bool|null $type
 * @property Carbon|null $created
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasActivitylicenceSpecialistsComment $muinas_activitylicence_specialists_comment
 *
 * @package App\Models
 */
class MuinasActivitylicenceSpecialistsCommentExtrafile extends Model
{
	protected $table = 'muinas_activitylicence_specialists_comment_extrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'licence_comment' => 'int',
		'filebank' => 'int',
		'type' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'created'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_activitylicence_specialists_comment()
	{
		return $this->belongsTo(MuinasActivitylicenceSpecialistsComment::class, 'licence_comment');
	}
}
