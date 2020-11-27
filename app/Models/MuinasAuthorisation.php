<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisation
 * 
 * @property int $id
 * @property string|null $training
 * @property string|null $place
 * @property int|null $nr
 * @property string $type
 * @property string|null $worksdescription
 * @property string|null $monumentname
 * @property string|null $coordinationdata
 * @property string|null $monumentaddress
 * @property Carbon|null $extradited
 * @property Carbon|null $valid
 * @property int|null $ownerperson
 * @property string|null $consumer
 * @property Carbon|null $startdate
 * @property Carbon|null $enddate
 * @property string|null $institution
 * @property string|null $conservator
 * @property Carbon|null $reportdeadline
 * @property bool|null $reportsubmited
 * @property string|null $documents
 * @property string|null $decision
 * @property string|null $purpose
 * @property string|null $comment
 * @property int $person
 * @property string|null $status
 * @property string|null $oldfields
 * @property bool|null $noreportneeded
 * @property string|null $repeal
 * @property Carbon|null $reportdeadlinenotice
 * @property string|null $issuer_at_signing
 * @property int|null $suspended
 * @property Carbon|null $suspendedfrom
 * @property Carbon|null $suspendedend
 * @property int|null $suspendedfile
 * @property int|null $repaired
 * @property string $state
 * @property Carbon|null $modified
 * @property Carbon|null $signed
 * @property int|null $notified
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property MuinasFilebank|null $muinas_filebank
 * @property Collection|MuinasAuthorisationmuinasobject[] $muinas_authorisationmuinasobjects
 * @property Collection|MuinasCitizendivenotice[] $muinas_citizendivenotices
 * @property Collection|MuinasCitizendivenoticereport[] $muinas_citizendivenoticereports
 * @property Collection|MuinasCompensationapplicationauthorisation[] $muinas_compensationapplicationauthorisations
 * @property Collection|MuinasCoordinationauthorisation[] $muinas_coordinationauthorisations
 * @property Collection|MuinasFindacceptact[] $muinas_findacceptacts
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchnotification[] $muinas_searchnotifications
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 *
 * @package App\Models
 */
class MuinasAuthorisation extends Model
{
	protected $table = 'muinas_authorisation';
	public $timestamps = false;

	protected $casts = [
		'nr' => 'int',
		'ownerperson' => 'int',
		'reportsubmited' => 'bool',
		'person' => 'int',
		'noreportneeded' => 'bool',
		'suspended' => 'int',
		'suspendedfile' => 'int',
		'repaired' => 'int',
		'notified' => 'int'
	];

	protected $dates = [
		'extradited',
		'valid',
		'startdate',
		'enddate',
		'reportdeadline',
		'reportdeadlinenotice',
		'suspendedfrom',
		'suspendedend',
		'modified',
		'signed'
	];

	protected $fillable = [
		'training',
		'place',
		'nr',
		'type',
		'worksdescription',
		'monumentname',
		'coordinationdata',
		'monumentaddress',
		'extradited',
		'valid',
		'ownerperson',
		'consumer',
		'startdate',
		'enddate',
		'institution',
		'conservator',
		'reportdeadline',
		'reportsubmited',
		'documents',
		'decision',
		'purpose',
		'comment',
		'person',
		'status',
		'oldfields',
		'noreportneeded',
		'repeal',
		'reportdeadlinenotice',
		'issuer_at_signing',
		'suspended',
		'suspendedfrom',
		'suspendedend',
		'suspendedfile',
		'repaired',
		'state',
		'modified',
		'signed',
		'notified'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'suspendedfile');
	}

	public function muinas_authorisationmuinasobjects()
	{
		return $this->hasMany(MuinasAuthorisationmuinasobject::class, 'authorisation');
	}

	public function muinas_citizendivenotices()
	{
		return $this->hasMany(MuinasCitizendivenotice::class, 'authorisation');
	}

	public function muinas_citizendivenoticereports()
	{
		return $this->hasMany(MuinasCitizendivenoticereport::class, 'authorisation');
	}

	public function muinas_compensationapplicationauthorisations()
	{
		return $this->hasMany(MuinasCompensationapplicationauthorisation::class, 'authorisation');
	}

	public function muinas_coordinationauthorisations()
	{
		return $this->hasMany(MuinasCoordinationauthorisation::class, 'authorisation');
	}

	public function muinas_findacceptacts()
	{
		return $this->hasMany(MuinasFindacceptact::class, 'authorisation');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'authorisation');
	}

	public function muinas_searchnotifications()
	{
		return $this->hasMany(MuinasSearchnotification::class, 'authorisation');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'authorisation');
	}
}
