<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplication
 * 
 * @property int $id
 * @property int|null $number
 * @property int $workpermit_type
 * @property Carbon $work_startdate
 * @property Carbon $work_enddate
 * @property string $sendingmethod
 * @property string $state
 * @property string|null $work_description
 * @property string|null $additional_info
 * @property int|null $research_needed
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property Carbon|null $valid
 * @property Carbon $deadline
 * @property Carbon|null $extendeddeadline
 * @property Carbon $created
 * @property Carbon|null $modified
 * @property string|null $reason
 * @property int|null $person
 * @property int|null $ownerperson
 * @property int|null $repaired
 * @property Carbon|null $repaireddate
 * @property string|null $contact_person_name
 * @property string|null $contact_person_code
 * @property string|null $contact_person_phone
 * @property string|null $contact_person_email
 * @property int|null $applicant_id
 * @property string|null $applicant_name
 * @property string|null $applicant_code
 * @property string|null $applicant_phone
 * @property string|null $applicant_email
 * @property string|null $message
 * @property bool|null $notified
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasWorkpermit|null $muinas_workpermit
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasWorkpermitapplication extends Model
{
	protected $table = 'muinas_workpermitapplication';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'workpermit_type' => 'int',
		'research_needed' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'person' => 'int',
		'ownerperson' => 'int',
		'repaired' => 'int',
		'applicant_id' => 'int',
		'notified' => 'bool'
	];

	protected $dates = [
		'work_startdate',
		'work_enddate',
		'signed',
		'valid',
		'deadline',
		'extendeddeadline',
		'created',
		'modified',
		'repaireddate'
	];

	protected $fillable = [
		'number',
		'workpermit_type',
		'work_startdate',
		'work_enddate',
		'sendingmethod',
		'state',
		'work_description',
		'additional_info',
		'research_needed',
		'pdf',
		'ddoc',
		'signed',
		'valid',
		'deadline',
		'extendeddeadline',
		'created',
		'modified',
		'reason',
		'person',
		'ownerperson',
		'repaired',
		'repaireddate',
		'contact_person_name',
		'contact_person_code',
		'contact_person_phone',
		'contact_person_email',
		'applicant_id',
		'applicant_name',
		'applicant_code',
		'applicant_phone',
		'applicant_email',
		'message',
		'notified'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	public function muinas_workpermit()
	{
		return $this->belongsTo(MuinasWorkpermit::class, 'repaired');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
