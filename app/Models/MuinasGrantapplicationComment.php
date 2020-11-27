<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationComment
 * 
 * @property int $id
 * @property int|null $grantapplication_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property MuinasGrantapplication|null $muinas_grantapplication
 * @property Collection|MuinasGrantapplicationextrafileComment[] $muinas_grantapplicationextrafile_comments
 *
 * @package App\Models
 */
class MuinasGrantapplicationComment extends Model
{
	protected $table = 'muinas_grantapplication_comments';
	public $timestamps = false;

	protected $casts = [
		'grantapplication_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'grantapplication_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication_id');
	}

	public function muinas_grantapplicationextrafile_comments()
	{
		return $this->hasMany(MuinasGrantapplicationextrafileComment::class, 'grantapplication_comment');
	}
}
