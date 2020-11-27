<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalInternalnotice
 * 
 * @property int $id
 * @property int|null $coordination
 * @property string|null $notice
 * @property int|null $person
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasApprovalInternalnotice extends Model
{
	protected $table = 'muinas_approval_internalnotices';
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'coordination',
		'notice',
		'person',
		'created'
	];
}
