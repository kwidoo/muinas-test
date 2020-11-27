<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhaseResponse
 * 
 * @property int $id
 * @property int|null $proposition_phases_executor_id
 * @property string|null $message
 * @property Carbon|null $created
 * @property bool|null $comment_type
 * @property bool|null $checkbox
 * @property bool|null $status
 * 
 * @property MuinasPropositionPhasesExecutor|null $muinas_proposition_phases_executor
 * @property Collection|MuinasPropositionsPhaseResponseWorklistfile[] $muinas_propositions_phase_response_worklistfiles
 *
 * @package App\Models
 */
class MuinasPropositionPhaseResponse extends Model
{
	protected $table = 'muinas_proposition_phase_response';
	public $timestamps = false;

	protected $casts = [
		'proposition_phases_executor_id' => 'int',
		'comment_type' => 'bool',
		'checkbox' => 'bool',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'proposition_phases_executor_id',
		'message',
		'created',
		'comment_type',
		'checkbox',
		'status'
	];

	public function muinas_proposition_phases_executor()
	{
		return $this->belongsTo(MuinasPropositionPhasesExecutor::class, 'proposition_phases_executor_id');
	}

	public function muinas_propositions_phase_response_worklistfiles()
	{
		return $this->hasMany(MuinasPropositionsPhaseResponseWorklistfile::class, 'phase_response');
	}
}
