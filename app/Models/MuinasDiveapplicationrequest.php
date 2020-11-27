<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequest
 * 
 * @property int $id
 * @property int|null $number
 * @property string $phone
 * @property string $email
 * @property Carbon $created
 * @property string $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int $creater
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property int|null $report
 * @property string $signtype
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property int|null $authorisation
 * @property string|null $address
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $date_of_submission
 * @property string|null $application_status
 * @property string|null $decision
 * @property string|null $application_trainings
 * @property string|null $application_additional_trainings
 * @property string|null $pcode
 * @property string|null $name
 * @property Carbon|null $module_deadline
 * @property int|null $module_person
 * @property string|null $module_deadline_reason
 * @property string|null $module_person_reason
 * @property Carbon|null $module_deadline_default
 * @property string|null $status
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequest extends Model
{
	protected $table = 'muinas_diveapplicationrequest';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'report' => 'int',
		'authorisation' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'module_person' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted',
		'date_of_submission',
		'module_deadline',
		'module_deadline_default'
	];

	protected $fillable = [
		'number',
		'phone',
		'email',
		'created',
		'state',
		'modified',
		'pdf',
		'ddoc',
		'lang',
		'creater',
		'signed',
		'person',
		'message',
		'repaired',
		'report',
		'signtype',
		'submitted',
		'adminstate',
		'authorisation',
		'address',
		'county',
		'parish',
		'date_of_submission',
		'application_status',
		'decision',
		'application_trainings',
		'application_additional_trainings',
		'pcode',
		'name',
		'module_deadline',
		'module_person',
		'module_deadline_reason',
		'module_person_reason',
		'module_deadline_default',
		'status'
	];
}
