<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicence
 * 
 * @property int $id
 * @property int $nr
 * @property string $number
 * @property string $number_part_1
 * @property int $number_part_2
 * @property int $number_part_3
 * @property string $number_part_4
 * @property int|null $number_part_5
 * @property string $operator
 * @property string $address
 * @property string $phone
 * @property string $faks
 * @property string $email
 * @property string $forename
 * @property string $surname
 * @property string $type
 * @property string $pcode
 * @property string $jobname
 * @property string $training
 * @property string $work_type
 * @property string $specialists
 * @property Carbon|null $enddate
 * @property string $leader
 * @property string $comments
 * @property Carbon $created
 * @property string $status
 * @property int|null $ownerperson
 * @property Carbon|null $emailed
 * @property string $repeal
 * @property int|null $person
 * @property string $comment
 * @property Carbon|null $adminnotice
 * @property string|null $mtrrecord
 * @property Carbon|null $mtrimported
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasActivitylicenceresponsiblespecialist[] $muinas_activitylicenceresponsiblespecialists
 * @property Collection|MuinasCitizendivenoticeactivitylicence[] $muinas_citizendivenoticeactivitylicences
 * @property Collection|MuinasCitizendivenoticecompetencecertificate[] $muinas_citizendivenoticecompetencecertificates
 * @property Collection|MuinasCitizendivenoticereportactivitylicence[] $muinas_citizendivenoticereportactivitylicences
 * @property Collection|MuinasDivenoticeactivitylicence[] $muinas_divenoticeactivitylicences
 * @property Collection|MuinasDivenoticecompetencecertificate[] $muinas_divenoticecompetencecertificates
 * @property Collection|MuinasGrantapplicationreportactivitylicence[] $muinas_grantapplicationreportactivitylicences
 * @property Collection|MuinasPypapplicationreportactivitylicence[] $muinas_pypapplicationreportactivitylicences
 *
 * @package App\Models
 */
class MuinasActivitylicence extends Model
{
	protected $table = 'muinas_activitylicence';
	public $timestamps = false;

	protected $casts = [
		'nr' => 'int',
		'number_part_2' => 'int',
		'number_part_3' => 'int',
		'number_part_5' => 'int',
		'ownerperson' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'enddate',
		'created',
		'emailed',
		'adminnotice',
		'mtrimported'
	];

	protected $fillable = [
		'nr',
		'number',
		'number_part_1',
		'number_part_2',
		'number_part_3',
		'number_part_4',
		'number_part_5',
		'operator',
		'address',
		'phone',
		'faks',
		'email',
		'forename',
		'surname',
		'type',
		'pcode',
		'jobname',
		'training',
		'work_type',
		'specialists',
		'enddate',
		'leader',
		'comments',
		'created',
		'status',
		'ownerperson',
		'emailed',
		'repeal',
		'person',
		'comment',
		'adminnotice',
		'mtrrecord',
		'mtrimported'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_activitylicenceresponsiblespecialists()
	{
		return $this->hasMany(MuinasActivitylicenceresponsiblespecialist::class, 'activitylicence');
	}

	public function muinas_citizendivenoticeactivitylicences()
	{
		return $this->hasMany(MuinasCitizendivenoticeactivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_citizendivenoticecompetencecertificates()
	{
		return $this->hasMany(MuinasCitizendivenoticecompetencecertificate::class, 'competencecertificate');
	}

	public function muinas_citizendivenoticereportactivitylicences()
	{
		return $this->hasMany(MuinasCitizendivenoticereportactivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_divenoticeactivitylicences()
	{
		return $this->hasMany(MuinasDivenoticeactivitylicence::class, 'responsiblespecialist');
	}

	public function muinas_divenoticecompetencecertificates()
	{
		return $this->hasMany(MuinasDivenoticecompetencecertificate::class, 'competencecertificate');
	}

	public function muinas_grantapplicationreportactivitylicences()
	{
		return $this->hasMany(MuinasGrantapplicationreportactivitylicence::class, 'activitylicence');
	}

	public function muinas_pypapplicationreportactivitylicences()
	{
		return $this->hasMany(MuinasPypapplicationreportactivitylicence::class, 'activitylicence');
	}
}
