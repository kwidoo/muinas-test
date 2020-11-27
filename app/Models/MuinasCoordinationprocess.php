<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordinationprocess
 * 
 * @property int $id
 * @property Carbon $created
 * @property string $type
 * @property string $status
 * @property int $coordination
 * @property int $person
 * @property string $email_comment
 * 
 * @property MuinasCoordination $muinas_coordination
 * @property MuinasPerson $muinas_person
 * @property MuinasCoordinationprocessApprove $muinas_coordinationprocess_approve
 * @property MuinasCoordinationprocessArchived $muinas_coordinationprocess_archived
 * @property MuinasCoordinationprocessClosing $muinas_coordinationprocess_closing
 * @property Collection|MuinasCoordinationprocessComment[] $muinas_coordinationprocess_comments
 * @property MuinasCoordinationprocessDirectetion $muinas_coordinationprocess_directetion
 * @property MuinasCoordinationprocessIssued $muinas_coordinationprocess_issued
 * @property Collection|MuinasCoordinationprocessOwnernotice[] $muinas_coordinationprocess_ownernotices
 * @property MuinasCoordinationprocessReferral $muinas_coordinationprocess_referral
 * @property Collection|MuinasCoordinationprocessReferralPerson[] $muinas_coordinationprocess_referral_people
 * @property MuinasCoordinationprocessReturned $muinas_coordinationprocess_returned
 * @property MuinasCoordinationprocessTransmission $muinas_coordinationprocess_transmission
 *
 * @package App\Models
 */
class MuinasCoordinationprocess extends Model
{
	protected $table = 'muinas_coordinationprocess';
	public $timestamps = false;

	protected $casts = [
		'coordination' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'created',
		'type',
		'status',
		'coordination',
		'person',
		'email_comment'
	];

	public function muinas_coordination()
	{
		return $this->belongsTo(MuinasCoordination::class, 'coordination');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_coordinationprocess_approve()
	{
		return $this->hasOne(MuinasCoordinationprocessApprove::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_archived()
	{
		return $this->hasOne(MuinasCoordinationprocessArchived::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_closing()
	{
		return $this->hasOne(MuinasCoordinationprocessClosing::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_comments()
	{
		return $this->hasMany(MuinasCoordinationprocessComment::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_directetion()
	{
		return $this->hasOne(MuinasCoordinationprocessDirectetion::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_issued()
	{
		return $this->hasOne(MuinasCoordinationprocessIssued::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_ownernotices()
	{
		return $this->hasMany(MuinasCoordinationprocessOwnernotice::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_referral()
	{
		return $this->hasOne(MuinasCoordinationprocessReferral::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_referral_people()
	{
		return $this->hasMany(MuinasCoordinationprocessReferralPerson::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_returned()
	{
		return $this->hasOne(MuinasCoordinationprocessReturned::class, 'coordinationprocess');
	}

	public function muinas_coordinationprocess_transmission()
	{
		return $this->hasOne(MuinasCoordinationprocessTransmission::class, 'coordinationprocess');
	}
}
