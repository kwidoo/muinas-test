<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhaseType
 * 
 * @property int $id
 * @property string|null $phase_name
 * @property bool|null $without_task
 * @property bool|null $create_manualy
 * 
 * @property Collection|MuinasPropositionPhaseDeadline[] $muinas_proposition_phase_deadlines
 * @property Collection|MuinasPropositionPhase[] $muinas_proposition_phases
 *
 * @package App\Models
 */
class MuinasPropositionPhaseType extends Model
{
	protected $table = 'muinas_proposition_phase_types';
	public $timestamps = false;

	protected $casts = [
		'without_task' => 'bool',
		'create_manualy' => 'bool'
	];

	protected $fillable = [
		'phase_name',
		'without_task',
		'create_manualy'
	];

	public function muinas_proposition_phase_deadlines()
	{
		return $this->hasMany(MuinasPropositionPhaseDeadline::class, 'type_id');
	}

	public function muinas_proposition_phases()
	{
		return $this->hasMany(MuinasPropositionPhase::class, 'type_id');
	}
}
