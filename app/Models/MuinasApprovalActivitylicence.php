<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApprovalActivitylicence
 * 
 * @property int $id
 * @property int|null $approval
 * @property int|null $activitylicence
 * @property int|null $responsiblespecialist
 * @property string|null $type
 * @property string|null $number
 * @property string|null $name
 * @property string|null $code
 * @property string|null $email
 * @property string|null $phone
 *
 * @package App\Models
 */
class MuinasApprovalActivitylicence extends Model
{
	protected $table = 'muinas_approval_activitylicence';
	public $timestamps = false;

	protected $casts = [
		'approval' => 'int',
		'activitylicence' => 'int',
		'responsiblespecialist' => 'int'
	];

	protected $fillable = [
		'approval',
		'activitylicence',
		'responsiblespecialist',
		'type',
		'number',
		'name',
		'code',
		'email',
		'phone'
	];
}
