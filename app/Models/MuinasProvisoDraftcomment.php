<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoDraftcomment
 * 
 * @property int $id
 * @property int|null $proviso_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * @property int|null $ownerperson
 * 
 * @property Collection|MuinasProvisoCommentDraftxtrafile[] $muinas_proviso_comment_draftxtrafiles
 *
 * @package App\Models
 */
class MuinasProvisoDraftcomment extends Model
{
	protected $table = 'muinas_proviso_draftcomments';
	public $timestamps = false;

	protected $casts = [
		'proviso_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int',
		'ownerperson' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'proviso_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers',
		'ownerperson'
	];

	public function muinas_proviso_comment_draftxtrafiles()
	{
		return $this->hasMany(MuinasProvisoCommentDraftxtrafile::class, 'proviso_comment');
	}
}
