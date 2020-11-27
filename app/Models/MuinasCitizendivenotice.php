<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenotice
 * 
 * @property int $id
 * @property int|null $authorisation
 * @property Carbon $date
 * @property Carbon $enddate
 * @property int $nr_of_divers
 * @property int $nr_of_dives
 * @property string|null $info
 * @property string $state
 * @property Carbon|null $modified
 * @property Carbon|null $confirmed
 * @property string $lang
 * @property int $creater
 * @property int|null $person
 * @property int|null $report
 * @property Carbon|null $submitted
 * @property int|null $divenotice
 * @property int|null $diveapplicationrequest
 * @property Carbon|null $created
 * @property Carbon|null $reportneedednotice
 * @property string|null $raftregistrynumber
 * @property string|null $raftname
 * @property string|null $othertransportexplanation
 * @property string|null $inserttype
 * @property int|null $inserter
 * @property string|null $decision
 * @property int|null $number
 * @property int|null $repaired
 * 
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasDivenotice|null $muinas_divenotice
 * @property MuinasCitizendivenoticereport|null $muinas_citizendivenoticereport
 * @property Collection|MuinasCitizendivenoticeactivitylicence[] $muinas_citizendivenoticeactivitylicences
 * @property Collection|MuinasCitizendivenoticecompetencecertificate[] $muinas_citizendivenoticecompetencecertificates
 * @property Collection|MuinasCitizendivenoticemonument[] $muinas_citizendivenoticemonuments
 * @property Collection|MuinasCitizendivenoticestatelog[] $muinas_citizendivenoticestatelogs
 *
 * @package App\Models
 */
class MuinasCitizendivenotice extends Model
{
	protected $table = 'muinas_citizendivenotice';
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'nr_of_divers' => 'int',
		'nr_of_dives' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'report' => 'int',
		'divenotice' => 'int',
		'diveapplicationrequest' => 'int',
		'inserter' => 'int',
		'number' => 'int',
		'repaired' => 'int'
	];

	protected $dates = [
		'date',
		'enddate',
		'modified',
		'confirmed',
		'submitted',
		'created',
		'reportneedednotice'
	];

	protected $fillable = [
		'authorisation',
		'date',
		'enddate',
		'nr_of_divers',
		'nr_of_dives',
		'info',
		'state',
		'modified',
		'confirmed',
		'lang',
		'creater',
		'person',
		'report',
		'submitted',
		'divenotice',
		'diveapplicationrequest',
		'created',
		'reportneedednotice',
		'raftregistrynumber',
		'raftname',
		'othertransportexplanation',
		'inserttype',
		'inserter',
		'decision',
		'number',
		'repaired'
	];

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'creater');
	}

	public function muinas_divenotice()
	{
		return $this->belongsTo(MuinasDivenotice::class, 'divenotice');
	}

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'report');
	}

	public function muinas_citizendivenoticeactivitylicences()
	{
		return $this->hasMany(MuinasCitizendivenoticeactivitylicence::class, 'citizendivenotice');
	}

	public function muinas_citizendivenoticecompetencecertificates()
	{
		return $this->hasMany(MuinasCitizendivenoticecompetencecertificate::class, 'citizendivenotice');
	}

	public function muinas_citizendivenoticemonuments()
	{
		return $this->hasMany(MuinasCitizendivenoticemonument::class, 'citizendivenotice');
	}

	public function muinas_citizendivenoticestatelogs()
	{
		return $this->hasMany(MuinasCitizendivenoticestatelog::class, 'citizendivenotice');
	}
}
