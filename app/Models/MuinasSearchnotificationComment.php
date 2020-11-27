<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationComment
 * 
 * @property int $id
 * @property int|null $searchnotification_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property Collection|MuinasSearchnotificationextrafileComment[] $muinas_searchnotificationextrafile_comments
 *
 * @package App\Models
 */
class MuinasSearchnotificationComment extends Model
{
	protected $table = 'muinas_searchnotification_comments';
	public $timestamps = false;

	protected $casts = [
		'searchnotification_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchnotification_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_searchnotificationextrafile_comments()
	{
		return $this->hasMany(MuinasSearchnotificationextrafileComment::class, 'searchnotification_comment');
	}
}
