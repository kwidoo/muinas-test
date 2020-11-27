<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereport
 * 
 * @property int $id
 * @property Carbon|null $date
 * @property Carbon|null $enddate
 * @property int|null $nr_of_divers
 * @property int|null $nr_of_dives
 * @property string $comment
 * @property Carbon $created
 * @property string $state
 * @property Carbon|null $modified
 * @property Carbon|null $confirmed
 * @property int $creater
 * @property string $lang
 * @property int|null $authorisation
 * @property string|null $raftregistrynumber
 * @property string|null $raftname
 * @property string|null $message
 * @property string|null $othertransportexplanation
 * @property bool|null $is_take_place
 * @property string|null $inserttype
 * @property int|null $inserter
 * @property string|null $decision
 * @property int|null $number
 * @property int|null $repaired
 * 
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasCitizendivenotice[] $muinas_citizendivenotices
 * @property Collection|MuinasCitizendivenoticecompetencecreportertificate[] $muinas_citizendivenoticecompetencecreportertificates
 * @property Collection|MuinasCitizendivenoticereportactivitylicence[] $muinas_citizendivenoticereportactivitylicences
 * @property Collection|MuinasCitizendivenoticereportfile[] $muinas_citizendivenoticereportfiles
 * @property Collection|MuinasCitizendivenoticereportimage[] $muinas_citizendivenoticereportimages
 * @property Collection|MuinasCitizendivenoticereportreissue[] $muinas_citizendivenoticereportreissues
 * @property Collection|MuinasCitizendivenoticereportstatelog[] $muinas_citizendivenoticereportstatelogs
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereport extends Model
{
	protected $table = 'muinas_citizendivenoticereport';
	public $timestamps = false;

	protected $casts = [
		'nr_of_divers' => 'int',
		'nr_of_dives' => 'int',
		'creater' => 'int',
		'authorisation' => 'int',
		'is_take_place' => 'bool',
		'inserter' => 'int',
		'number' => 'int',
		'repaired' => 'int'
	];

	protected $dates = [
		'date',
		'enddate',
		'created',
		'modified',
		'confirmed'
	];

	protected $fillable = [
		'date',
		'enddate',
		'nr_of_divers',
		'nr_of_dives',
		'comment',
		'created',
		'state',
		'modified',
		'confirmed',
		'creater',
		'lang',
		'authorisation',
		'raftregistrynumber',
		'raftname',
		'message',
		'othertransportexplanation',
		'is_take_place',
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

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'inserter');
	}

	public function muinas_citizendivenotices()
	{
		return $this->hasMany(MuinasCitizendivenotice::class, 'report');
	}

	public function muinas_citizendivenoticecompetencecreportertificates()
	{
		return $this->hasMany(MuinasCitizendivenoticecompetencecreportertificate::class, 'citizendivenoticereport');
	}

	public function muinas_citizendivenoticereportactivitylicences()
	{
		return $this->hasMany(MuinasCitizendivenoticereportactivitylicence::class, 'citizendivenoticereport');
	}

	public function muinas_citizendivenoticereportfiles()
	{
		return $this->hasMany(MuinasCitizendivenoticereportfile::class, 'citizendivenoticereport');
	}

	public function muinas_citizendivenoticereportimages()
	{
		return $this->hasMany(MuinasCitizendivenoticereportimage::class, 'citizendivenoticereport');
	}

	public function muinas_citizendivenoticereportreissues()
	{
		return $this->hasMany(MuinasCitizendivenoticereportreissue::class, 'citizendivenoticereport');
	}

	public function muinas_citizendivenoticereportstatelogs()
	{
		return $this->hasMany(MuinasCitizendivenoticereportstatelog::class, 'citizendivenoticereport');
	}
}
