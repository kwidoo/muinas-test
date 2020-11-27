<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoComment
 * 
 * @property int $id
 * @property int|null $proviso_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property Collection|MuinasProvisocommentextrafile[] $muinas_provisocommentextrafiles
 *
 * @package App\Models
 */
class MuinasProvisoComment extends Model
{
	protected $table = 'muinas_proviso_comments';
	public $timestamps = false;

	protected $casts = [
		'proviso_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
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
		'receivers'
	];

	public function muinas_provisocommentextrafiles()
	{
		return $this->hasMany(MuinasProvisocommentextrafile::class, 'proviso_comment');
	}
}
