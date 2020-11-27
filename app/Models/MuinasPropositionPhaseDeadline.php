<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionPhaseDeadline
 * 
 * @property int $id
 * @property int $type_id
 * @property int|null $days
 * 
 * @property MuinasPropositionPhaseType $muinas_proposition_phase_type
 *
 * @package App\Models
 */
class MuinasPropositionPhaseDeadline extends Model
{
	protected $table = 'muinas_proposition_phase_deadlines';
	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int',
		'days' => 'int'
	];

	protected $fillable = [
		'type_id',
		'days'
	];

	public function muinas_proposition_phase_type()
	{
		return $this->belongsTo(MuinasPropositionPhaseType::class, 'type_id');
	}
}
