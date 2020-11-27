<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalDraftFile
 * 
 * @property int $approval_draft
 * @property int $filebank
 * @property string|null $title
 * @property bool|null $type
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasApprovalDraftFile extends Model
{
	protected $table = 'muinas_approval_draft_file';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'approval_draft' => 'int',
		'filebank' => 'int',
		'type' => 'bool',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'type',
		'person',
		'created'
	];
}
