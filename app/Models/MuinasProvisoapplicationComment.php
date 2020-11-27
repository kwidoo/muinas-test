<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationComment
 * 
 * @property int $id
 * @property int|null $provisoapplication_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 * 
 * @property MuinasProvisoapplication|null $muinas_provisoapplication
 * @property Collection|MuinasProvisoapplicationextrafileComment[] $muinas_provisoapplicationextrafile_comments
 * @property Collection|MuinasProvisoapplicationimageComment[] $muinas_provisoapplicationimage_comments
 *
 * @package App\Models
 */
class MuinasProvisoapplicationComment extends Model
{
	protected $table = 'muinas_provisoapplication_comments';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'provisoapplication_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication_id');
	}

	public function muinas_provisoapplicationextrafile_comments()
	{
		return $this->hasMany(MuinasProvisoapplicationextrafileComment::class, 'provisoapplication_comment');
	}

	public function muinas_provisoapplicationimage_comments()
	{
		return $this->hasMany(MuinasProvisoapplicationimageComment::class, 'provisoapplication_comment');
	}
}
