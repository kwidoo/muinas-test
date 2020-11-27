<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermit
 * 
 * @property int $id
 * @property int|null $number
 * @property int $workpermit_type
 * @property Carbon|null $work_startdate
 * @property Carbon|null $work_enddate
 * @property string $sendingmethod
 * @property string $state
 * @property string|null $work_description
 * @property string|null $additional_info
 * @property int|null $research_needed
 * @property int|null $pdf
 * @property int|null $decision
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property Carbon|null $valid
 * @property Carbon $deadline
 * @property Carbon|null $extendeddeadline
 * @property Carbon $created
 * @property int|null $creater
 * @property Carbon|null $modified
 * @property string|null $reason
 * @property int|null $person
 * @property int|null $ownerperson
 * @property string $contact_person_name
 * @property string $contact_person_code
 * @property string $contact_person_phone
 * @property string $contact_person_email
 * @property int|null $repaired
 * @property Carbon|null $repaireddate
 * @property int|null $workpermitapplication
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasWorkpermit|null $muinas_workpermit
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasWorkpermit[] $muinas_workpermits
 * @property Collection|MuinasWorkpermitapplication[] $muinas_workpermitapplications
 *
 * @package App\Models
 */
class MuinasWorkpermit extends Model
{
	protected $table = 'muinas_workpermit';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'workpermit_type' => 'int',
		'research_needed' => 'int',
		'pdf' => 'int',
		'decision' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'ownerperson' => 'int',
		'repaired' => 'int',
		'workpermitapplication' => 'int'
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
		'decision',
		'ddoc',
		'signed',
		'valid',
		'deadline',
		'extendeddeadline',
		'created',
		'creater',
		'modified',
		'reason',
		'person',
		'ownerperson',
		'contact_person_name',
		'contact_person_code',
		'contact_person_phone',
		'contact_person_email',
		'repaired',
		'repaireddate',
		'workpermitapplication'
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

	public function muinas_workpermits()
	{
		return $this->hasMany(MuinasWorkpermit::class, 'repaired');
	}

	public function muinas_workpermitapplications()
	{
		return $this->hasMany(MuinasWorkpermitapplication::class, 'repaired');
	}
}
