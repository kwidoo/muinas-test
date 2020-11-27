<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestComment
 * 
 * @property int $id
 * @property int|null $application_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestComment extends Model
{
	protected $table = 'muinas_diveapplicationrequest_comments';
	public $timestamps = false;

	protected $casts = [
		'application_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'application_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
