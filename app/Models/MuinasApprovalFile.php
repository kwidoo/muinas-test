<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalFile
 * 
 * @property int $id
 * @property int $approval
 * @property int|null $coordination
 * @property int $filebank
 * @property string|null $title
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $type
 * @property int|null $disabled
 *
 * @package App\Models
 */
class MuinasApprovalFile extends Model
{
	protected $table = 'muinas_approval_file';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'coordination' => 'int',
		'filebank' => 'int',
		'person' => 'int',
		'type' => 'int',
		'disabled' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'approval',
		'coordination',
		'filebank',
		'title',
		'person',
		'created',
		'type',
		'disabled'
	];
}
