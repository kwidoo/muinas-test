<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasValjaveoComment
 * 
 * @property int $id
 * @property int|null $export_id
 * @property int|null $person_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $status
 *
 * @package App\Models
 */
class MuinasValjaveoComment extends Model
{
	protected $table = 'muinas_valjaveo_comments';
	public $timestamps = false;

	protected $casts = [
		'export_id' => 'int',
		'person_id' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'export_id',
		'person_id',
		'message',
		'created',
		'status'
	];
}
