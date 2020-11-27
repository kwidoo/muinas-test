<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentProtectionprocessPhase
 * 
 * @property int $id
 * @property int $monument
 * @property int $phase
 * @property string $comment
 * @property Carbon $created
 * @property Carbon $date
 * @property int|null $person
 * @property string $status
 * @property bool $notifycreator
 * @property int $overwritten_by
 * @property int|null $solverperson
 * @property Carbon|null $solved_date
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasMonumentProtectionprocessPhasePerson[] $muinas_monument_protectionprocess_phase_people
 *
 * @package App\Models
 */
class MuinasMonumentProtectionprocessPhase extends Model
{
	protected $table = 'muinas_monument_protectionprocess_phase';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'phase' => 'int',
		'person' => 'int',
		'notifycreator' => 'bool',
		'overwritten_by' => 'int',
		'solverperson' => 'int'
	];

	protected $dates = [
		'created',
		'date',
		'solved_date'
	];

	protected $fillable = [
		'monument',
		'phase',
		'comment',
		'created',
		'date',
		'person',
		'status',
		'notifycreator',
		'overwritten_by',
		'solverperson',
		'solved_date'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'solverperson');
	}

	public function muinas_monument_protectionprocess_phase_people()
	{
		return $this->hasMany(MuinasMonumentProtectionprocessPhasePerson::class, 'phase');
	}
}
