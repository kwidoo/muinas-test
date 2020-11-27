<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhasesExecutor
 * 
 * @property int $id
 * @property int|null $executor_id
 * @property bool|null $executor_type
 * @property int|null $proposition_phase_id
 * @property bool $status
 * 
 * @property MuinasPropositionPhase|null $muinas_proposition_phase
 * @property Collection|MuinasPropositionPhaseResponse[] $muinas_proposition_phase_responses
 *
 * @package App\Models
 */
class MuinasPropositionPhasesExecutor extends Model
{
	protected $table = 'muinas_proposition_phases_executors';
	public $timestamps = false;

	protected $casts = [
		'executor_id' => 'int',
		'executor_type' => 'bool',
		'proposition_phase_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'executor_id',
		'executor_type',
		'proposition_phase_id',
		'status'
	];

	public function muinas_proposition_phase()
	{
		return $this->belongsTo(MuinasPropositionPhase::class, 'proposition_phase_id');
	}

	public function muinas_proposition_phase_responses()
	{
		return $this->hasMany(MuinasPropositionPhaseResponse::class, 'proposition_phases_executor_id');
	}
}
