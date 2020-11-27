<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchpermitComment
 * 
 * @property int $id
 * @property int $searchpermit_id
 * @property int|null $searchapplicationrequest_id
 * @property int|null $authorisation_id
 * @property int $person_id
 * @property string $message
 * @property Carbon $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property Collection|MuinasSearchpermitextrafileComment[] $muinas_searchpermitextrafile_comments
 *
 * @package App\Models
 */
class MuinasSearchpermitComment extends Model
{
	protected $table = 'muinas_searchpermit_comments';
	public $timestamps = false;

	protected $casts = [
		'searchpermit_id' => 'int',
		'searchapplicationrequest_id' => 'int',
		'authorisation_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchpermit_id',
		'searchapplicationrequest_id',
		'authorisation_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_searchpermitextrafile_comments()
	{
		return $this->hasMany(MuinasSearchpermitextrafileComment::class, 'searchpermit_comment');
	}
}
