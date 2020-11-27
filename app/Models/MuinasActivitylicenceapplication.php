<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplication
 * 
 * @property int $id
 * @property int|null $number
 * @property string $state
 * @property string $type
 * @property Carbon|null $created
 * @property Carbon|null $modified
 * @property string|null $lang
 * @property string|null $name
 * @property int|null $activitylicence_id
 * @property int $ownerperson
 * @property int|null $person
 * @property string|null $reason
 * @property string|null $decision
 * @property string|null $message
 * @property int|null $pdf
 * @property int|null $repaired
 * @property int|null $coordination
 * @property int|null $mka_person
 * @property Carbon|null $module_deadline
 * @property int|null $worknotice
 * @property int|null $module_person
 * @property Carbon|null $module_deadline_default
 * @property int|null $editor_admin_id
 * @property Carbon|null $date_sent_to_correction
 * @property string|null $reason_sent_to_correction
 * @property string|null $test
 * @property string|null $code
 * @property int|null $county
 * @property int|null $parish
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property Carbon|null $submitted
 * @property Carbon $deadline
 * @property Carbon|null $updated
 * @property string|null $works
 * @property string|null $work_type
 * @property string|null $approval_notes
 * @property string|null $speciality
 * @property Carbon|null $approval_date
 * @property string|null $dive_permit
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplication extends Model
{
	protected $table = 'muinas_activitylicenceapplication';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'activitylicence_id' => 'int',
		'ownerperson' => 'int',
		'person' => 'int',
		'pdf' => 'int',
		'repaired' => 'int',
		'coordination' => 'int',
		'mka_person' => 'int',
		'worknotice' => 'int',
		'module_person' => 'int',
		'editor_admin_id' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'module_deadline',
		'module_deadline_default',
		'date_sent_to_correction',
		'submitted',
		'deadline',
		'updated',
		'approval_date'
	];

	protected $fillable = [
		'number',
		'state',
		'type',
		'created',
		'modified',
		'lang',
		'name',
		'activitylicence_id',
		'ownerperson',
		'person',
		'reason',
		'decision',
		'message',
		'pdf',
		'repaired',
		'coordination',
		'mka_person',
		'module_deadline',
		'worknotice',
		'module_person',
		'module_deadline_default',
		'editor_admin_id',
		'date_sent_to_correction',
		'reason_sent_to_correction',
		'test',
		'code',
		'county',
		'parish',
		'address',
		'email',
		'phone',
		'submitted',
		'deadline',
		'updated',
		'works',
		'work_type',
		'approval_notes',
		'speciality',
		'approval_date',
		'dive_permit'
	];
}
