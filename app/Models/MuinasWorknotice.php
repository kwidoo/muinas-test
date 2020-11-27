<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknotice
 * 
 * @property int $id
 * @property int|null $number
 * @property string $type
 * @property string $subtype
 * @property string $reason
 * @property Carbon $work_startdate
 * @property Carbon $work_enddate
 * @property string $sendingmethod
 * @property string $state
 * @property string|null $message
 * @property int|null $pdf
 * @property int|null $decision
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property Carbon|null $valid
 * @property Carbon $deadline
 * @property Carbon|null $extendeddeadline
 * @property Carbon $created
 * @property Carbon|null $repaireddate
 * @property Carbon|null $modified
 * @property int $person
 * @property int $ownerperson
 * @property int|null $researchperson
 * @property string $contact_person_name
 * @property string $contact_person_code
 * @property string $contact_person_phone
 * @property string $contact_person_email
 * @property string|null $research_person_name
 * @property string|null $research_person_code
 * @property string|null $research_person_phone
 * @property string|null $research_person_email
 * @property int|null $repaired
 * @property bool|null $notified
 *
 * @package App\Models
 */
class MuinasWorknotice extends Model
{
	protected $table = 'muinas_worknotice';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'pdf' => 'int',
		'decision' => 'int',
		'ddoc' => 'int',
		'person' => 'int',
		'ownerperson' => 'int',
		'researchperson' => 'int',
		'repaired' => 'int',
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
		'repaireddate',
		'modified'
	];

	protected $fillable = [
		'number',
		'type',
		'subtype',
		'reason',
		'work_startdate',
		'work_enddate',
		'sendingmethod',
		'state',
		'message',
		'pdf',
		'decision',
		'ddoc',
		'signed',
		'valid',
		'deadline',
		'extendeddeadline',
		'created',
		'repaireddate',
		'modified',
		'person',
		'ownerperson',
		'researchperson',
		'contact_person_name',
		'contact_person_code',
		'contact_person_phone',
		'contact_person_email',
		'research_person_name',
		'research_person_code',
		'research_person_phone',
		'research_person_email',
		'repaired',
		'notified'
	];
}
