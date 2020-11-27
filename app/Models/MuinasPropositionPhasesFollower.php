<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhasesFollower
 * 
 * @property int $id
 * @property int|null $follower_id
 * @property bool|null $follower_type
 * @property int|null $proposition_phase_id
 * 
 * @property MuinasPropositionPhase|null $muinas_proposition_phase
 *
 * @package App\Models
 */
class MuinasPropositionPhasesFollower extends Model
{
	protected $table = 'muinas_proposition_phases_followers';
	public $timestamps = false;

	protected $casts = [
		'follower_id' => 'int',
		'follower_type' => 'bool',
		'proposition_phase_id' => 'int'
	];

	protected $fillable = [
		'follower_id',
		'follower_type',
		'proposition_phase_id'
	];

	public function muinas_proposition_phase()
	{
		return $this->belongsTo(MuinasPropositionPhase::class, 'proposition_phase_id');
	}
}
