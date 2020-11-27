<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceSpecialistsComment
 * 
 * @property int $id
 * @property int|null $activitylicence
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property Collection|MuinasActivitylicenceSpecialistsCommentExtrafile[] $muinas_activitylicence_specialists_comment_extrafiles
 *
 * @package App\Models
 */
class MuinasActivitylicenceSpecialistsComment extends Model
{
	protected $table = 'muinas_activitylicence_specialists_comments';
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'activitylicence',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_activitylicence_specialists_comment_extrafiles()
	{
		return $this->hasMany(MuinasActivitylicenceSpecialistsCommentExtrafile::class, 'licence_comment');
	}
}
