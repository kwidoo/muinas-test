<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticeComment
 * 
 * @property int $id
 * @property int|null $divenotice_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property string|null $receivers
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasCitizendivenoticeComment extends Model
{
	protected $table = 'muinas_citizendivenotice_comments';
	public $timestamps = false;

	protected $casts = [
		'divenotice_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'divenotice_id',
		'person_id',
		'message',
		'created',
		'status',
		'receivers',
		'type'
	];
}
