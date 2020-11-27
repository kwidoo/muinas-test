<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestComment
 * 
 * @property int $id
 * @property int|null $searchapplicationrequest_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property Collection|MuinasSearchapplicationrequestextrafileComment[] $muinas_searchapplicationrequestextrafile_comments
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestComment extends Model
{
	protected $table = 'muinas_searchapplicationrequest_comments';
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchapplicationrequest_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_searchapplicationrequestextrafile_comments()
	{
		return $this->hasMany(MuinasSearchapplicationrequestextrafileComment::class, 'searchapplicationrequest_comment');
	}
}
