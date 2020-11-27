<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsPhaseWorklistfile
 * 
 * @property int $phase
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasPropositionPhase $muinas_proposition_phase
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPropositionsPhaseWorklistfile extends Model
{
	protected $table = 'muinas_propositions_phase_worklistfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'phase' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_proposition_phase()
	{
		return $this->belongsTo(MuinasPropositionPhase::class, 'phase');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
