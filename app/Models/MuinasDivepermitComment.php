<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivepermitComment
 * 
 * @property int $id
 * @property int $divepermit_id
 * @property int|null $diveapplicationrequest_id
 * @property int|null $authorisation_id
 * @property int $person_id
 * @property string $message
 * @property Carbon $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasDivepermitComment extends Model
{
	protected $table = 'muinas_divepermit_comments';
	public $timestamps = false;

	protected $casts = [
		'divepermit_id' => 'int',
		'diveapplicationrequest_id' => 'int',
		'authorisation_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'divepermit_id',
		'diveapplicationrequest_id',
		'authorisation_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
