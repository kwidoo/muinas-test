<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhase
 * 
 * @property int $id
 * @property int|null $type_id
 * @property int|null $proposition_id
 * @property int|null $manager_id
 * @property Carbon|null $deadline
 * @property Carbon|null $created
 * @property bool|null $status
 * @property string|null $decision
 * @property bool|null $comment_type
 * @property string|null $manager_comment
 * @property string|null $citizen_comment
 * @property bool|null $comment_type_different
 * 
 * @property MuinasProposition|null $muinas_proposition
 * @property MuinasPropositionPhaseType|null $muinas_proposition_phase_type
 * @property Collection|MuinasPropositionPhasesExecutor[] $muinas_proposition_phases_executors
 * @property Collection|MuinasPropositionPhasesFollower[] $muinas_proposition_phases_followers
 * @property Collection|MuinasProposition[] $muinas_propositions
 * @property Collection|MuinasPropositionsPhaseWorklistfile[] $muinas_propositions_phase_worklistfiles
 *
 * @package App\Models
 */
class MuinasPropositionPhase extends Model
{
	protected $table = 'muinas_proposition_phases';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'proposition_id' => 'int',
		'manager_id' => 'int',
		'status' => 'bool',
		'comment_type' => 'bool',
		'comment_type_different' => 'bool'
	];

	protected $dates = [
		'deadline',
		'created'
	];

	protected $fillable = [
		'type_id',
		'proposition_id',
		'manager_id',
		'deadline',
		'created',
		'status',
		'decision',
		'comment_type',
		'manager_comment',
		'citizen_comment',
		'comment_type_different'
	];

	public function muinas_proposition()
	{
		return $this->belongsTo(MuinasProposition::class, 'proposition_id');
	}

	public function muinas_proposition_phase_type()
	{
		return $this->belongsTo(MuinasPropositionPhaseType::class, 'type_id');
	}

	public function muinas_proposition_phases_executors()
	{
		return $this->hasMany(MuinasPropositionPhasesExecutor::class, 'proposition_phase_id');
	}

	public function muinas_proposition_phases_followers()
	{
		return $this->hasMany(MuinasPropositionPhasesFollower::class, 'proposition_phase_id');
	}

	public function muinas_propositions()
	{
		return $this->hasMany(MuinasProposition::class, 'phase_id');
	}

	public function muinas_propositions_phase_worklistfiles()
	{
		return $this->hasMany(MuinasPropositionsPhaseWorklistfile::class, 'phase');
	}
}
