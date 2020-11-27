<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDivenotice
 * 
 * @property int $id
 * @property Carbon $created
 * @property Carbon $divedate
 * @property Carbon $diveenddate
 * @property int $nr_of_divers
 * @property int $nr_of_dives
 * @property string|null $comment
 * @property string $status
 * @property int|null $authorisation
 * @property string|null $inserttype
 * @property string|null $inserter
 * @property string|null $raftregistrynumber
 * @property string|null $raftname
 * @property string|null $othertransportexplanation
 * @property int|null $person
 * @property string|null $decision
 * @property Carbon|null $modified
 * 
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasCitizendivenotice[] $muinas_citizendivenotices
 * @property Collection|MuinasDivenoticeactivitylicence[] $muinas_divenoticeactivitylicences
 * @property Collection|MuinasDivenoticecompetencecertificate[] $muinas_divenoticecompetencecertificates
 *
 * @package App\Models
 */
class MuinasDivenotice extends Model
{
	protected $table = 'muinas_divenotice';
	public $timestamps = false;

	protected $casts = [
		'nr_of_divers' => 'int',
		'nr_of_dives' => 'int',
		'authorisation' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created',
		'divedate',
		'diveenddate',
		'modified'
	];

	protected $fillable = [
		'created',
		'divedate',
		'diveenddate',
		'nr_of_divers',
		'nr_of_dives',
		'comment',
		'status',
		'authorisation',
		'inserttype',
		'inserter',
		'raftregistrynumber',
		'raftname',
		'othertransportexplanation',
		'person',
		'decision',
		'modified'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_citizendivenotices()
	{
		return $this->hasMany(MuinasCitizendivenotice::class, 'divenotice');
	}

	public function muinas_divenoticeactivitylicences()
	{
		return $this->hasMany(MuinasDivenoticeactivitylicence::class, 'divenotice');
	}

	public function muinas_divenoticecompetencecertificates()
	{
		return $this->hasMany(MuinasDivenoticecompetencecertificate::class, 'divenotice');
	}
}
