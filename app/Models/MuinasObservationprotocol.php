<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasObservationprotocol
 * 
 * @property int $id
 * @property Carbon $created
 * @property Carbon $prepared
 * @property Carbon $observationstarttime
 * @property Carbon $observationendtime
 * @property Carbon $observationdate
 * @property string|null $observationterms
 * @property int|null $pagecount
 * @property int|null $person
 * @property int|null $preparer
 * @property int|null $inspector
 * @property string $status
 * 
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasMemorandum[] $muinas_memorandums
 * @property Collection|MuinasObservationprotocolcoinspector[] $muinas_observationprotocolcoinspectors
 * @property Collection|MuinasObservationprotocolestablish[] $muinas_observationprotocolestablishes
 * @property Collection|MuinasObservationprotocolimage[] $muinas_observationprotocolimages
 * @property Collection|MuinasObservationprotocolmuinasobject[] $muinas_observationprotocolmuinasobjects
 * @property Collection|MuinasObservationprotocolownerperson[] $muinas_observationprotocolownerpeople
 *
 * @package App\Models
 */
class MuinasObservationprotocol extends Model
{
	protected $table = 'muinas_observationprotocol';
	public $timestamps = false;

	protected $casts = [
		'pagecount' => 'int',
		'person' => 'int',
		'preparer' => 'int',
		'inspector' => 'int'
	];

	protected $dates = [
		'created',
		'prepared',
		'observationstarttime',
		'observationendtime',
		'observationdate'
	];

	protected $fillable = [
		'created',
		'prepared',
		'observationstarttime',
		'observationendtime',
		'observationdate',
		'observationterms',
		'pagecount',
		'person',
		'preparer',
		'inspector',
		'status'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'inspector');
	}

	public function muinas_memorandums()
	{
		return $this->hasMany(MuinasMemorandum::class, 'observationprotocol');
	}

	public function muinas_observationprotocolcoinspectors()
	{
		return $this->hasMany(MuinasObservationprotocolcoinspector::class, 'observationprotocol');
	}

	public function muinas_observationprotocolestablishes()
	{
		return $this->hasMany(MuinasObservationprotocolestablish::class, 'observationprotocol');
	}

	public function muinas_observationprotocolimages()
	{
		return $this->hasMany(MuinasObservationprotocolimage::class, 'observationprotocol');
	}

	public function muinas_observationprotocolmuinasobjects()
	{
		return $this->hasMany(MuinasObservationprotocolmuinasobject::class, 'observationprotocol');
	}

	public function muinas_observationprotocolownerpeople()
	{
		return $this->hasMany(MuinasObservationprotocolownerperson::class, 'observationprotocol');
	}
}
