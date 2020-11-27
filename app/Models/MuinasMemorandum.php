<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMemorandum
 * 
 * @property int $id
 * @property Carbon $created
 * @property string|null $number
 * @property int $observationprotocol
 * @property int $ownerperson
 * @property int|null $cm_state
 * @property string|null $danger
 * @property int|null $person
 * @property string $status
 * @property int|null $webdesktop
 * 
 * @property MuinasObservationprotocol $muinas_observationprotocol
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasClassificator|null $muinas_classificator
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasMemorandumwork[] $muinas_memorandumworks
 *
 * @package App\Models
 */
class MuinasMemorandum extends Model
{
	protected $table = 'muinas_memorandum';
	public $timestamps = false;

	protected $casts = [
		'observationprotocol' => 'int',
		'ownerperson' => 'int',
		'cm_state' => 'int',
		'person' => 'int',
		'webdesktop' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'created',
		'number',
		'observationprotocol',
		'ownerperson',
		'cm_state',
		'danger',
		'person',
		'status',
		'webdesktop'
	];

	public function muinas_observationprotocol()
	{
		return $this->belongsTo(MuinasObservationprotocol::class, 'observationprotocol');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_state');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_memorandumworks()
	{
		return $this->hasMany(MuinasMemorandumwork::class, 'memorandum');
	}
}
