<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportComment
 * 
 * @property int $id
 * @property int|null $citizendivenoticereport_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property bool|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportComment extends Model
{
	protected $table = 'muinas_citizendivenoticereport_comments';
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'citizendivenoticereport_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
