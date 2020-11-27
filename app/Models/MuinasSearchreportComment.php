<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportComment
 * 
 * @property int $id
 * @property int|null $searchreport_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $type
 * @property string|null $receivers
 *
 * @package App\Models
 */
class MuinasSearchreportComment extends Model
{
	protected $table = 'muinas_searchreport_comments';
	public $timestamps = false;

	protected $casts = [
		'searchreport_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'searchreport_id',
		'person_id',
		'message',
		'created',
		'status',
		'type',
		'receivers'
	];
}
