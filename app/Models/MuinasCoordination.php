<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCoordination
 * 
 * @property int $id
 * @property int|null $ownerperson
 * @property int $coordination_type
 * @property int $person
 * @property Carbon|null $created
 * @property Carbon|null $arhived
 * @property string|null $address
 * @property string|null $description
 * @property string $status
 * @property Carbon|null $issued
 * @property int|null $issuer
 * @property Carbon|null $archived
 * @property int|null $old_unkown_ownerperson
 * @property string|null $issuer_at_signing
 * 
 * @property MuinasPerson|null $muinas_person
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasCompensationapplicationcoordination[] $muinas_compensationapplicationcoordinations
 * @property Collection|MuinasCoordinationauthorisation[] $muinas_coordinationauthorisations
 * @property Collection|MuinasCoordinationmuinasobject[] $muinas_coordinationmuinasobjects
 * @property Collection|MuinasCoordinationprocess[] $muinas_coordinationprocesses
 * @property Collection|MuinasCoordinationurl[] $muinas_coordinationurls
 * @property Collection|MuinasGrantapplicationcoordination[] $muinas_grantapplicationcoordinations
 * @property Collection|MuinasPypapplicationcoordination[] $muinas_pypapplicationcoordinations
 *
 * @package App\Models
 */
class MuinasCoordination extends Model
{
	protected $table = 'muinas_coordination';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'coordination_type' => 'int',
		'person' => 'int',
		'issuer' => 'int',
		'old_unkown_ownerperson' => 'int'
	];

	protected $dates = [
		'created',
		'arhived',
		'issued',
		'archived'
	];

	protected $fillable = [
		'ownerperson',
		'coordination_type',
		'person',
		'created',
		'arhived',
		'address',
		'description',
		'status',
		'issued',
		'issuer',
		'archived',
		'old_unkown_ownerperson',
		'issuer_at_signing'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'issuer');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_compensationapplicationcoordinations()
	{
		return $this->hasMany(MuinasCompensationapplicationcoordination::class, 'coordination');
	}

	public function muinas_coordinationauthorisations()
	{
		return $this->hasMany(MuinasCoordinationauthorisation::class, 'coordination');
	}

	public function muinas_coordinationmuinasobjects()
	{
		return $this->hasMany(MuinasCoordinationmuinasobject::class, 'coordination');
	}

	public function muinas_coordinationprocesses()
	{
		return $this->hasMany(MuinasCoordinationprocess::class, 'coordination');
	}

	public function muinas_coordinationurls()
	{
		return $this->hasMany(MuinasCoordinationurl::class, 'coordination');
	}

	public function muinas_grantapplicationcoordinations()
	{
		return $this->hasMany(MuinasGrantapplicationcoordination::class, 'coordination');
	}

	public function muinas_pypapplicationcoordinations()
	{
		return $this->hasMany(MuinasPypapplicationcoordination::class, 'coordination');
	}
}
