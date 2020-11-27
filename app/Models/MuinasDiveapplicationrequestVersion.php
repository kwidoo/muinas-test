<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestVersion
 * 
 * @property int $id
 * @property int|null $application_id
 * @property int|null $number
 * @property string|null $phone
 * @property string|null $email
 * @property Carbon|null $created
 * @property string $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string|null $lang
 * @property int|null $creater
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property int|null $report
 * @property string $signtype
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property string|null $decision
 * @property int|null $authorisation
 * @property string|null $address
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $date_of_submission
 * @property string|null $application_status
 * @property string|null $changed_fields
 * @property string|null $application_trainings
 * @property string|null $application_additional_trainings
 * @property int|null $version_number
 * @property int|null $editor_admin_id
 * @property int|null $editor_citizen_id
 * @property string|null $pcode
 * @property string|null $name
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestVersion extends Model
{
	protected $table = 'muinas_diveapplicationrequest_versions';
	public $timestamps = false;

	protected $casts = [
		'application_id' => 'int',
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
		'version_number' => 'int',
		'editor_admin_id' => 'int',
		'editor_citizen_id' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted',
		'date_of_submission'
	];

	protected $fillable = [
		'application_id',
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
		'decision',
		'authorisation',
		'address',
		'county',
		'parish',
		'date_of_submission',
		'application_status',
		'changed_fields',
		'application_trainings',
		'application_additional_trainings',
		'version_number',
		'editor_admin_id',
		'editor_citizen_id',
		'pcode',
		'name'
	];
}
