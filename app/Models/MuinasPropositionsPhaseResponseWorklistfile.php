<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionsPhaseResponseWorklistfile
 * 
 * @property int $phase_response
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPropositionPhaseResponse $muinas_proposition_phase_response
 *
 * @package App\Models
 */
class MuinasPropositionsPhaseResponseWorklistfile extends Model
{
	protected $table = 'muinas_propositions_phase_response_worklistfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'phase_response' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_proposition_phase_response()
	{
		return $this->belongsTo(MuinasPropositionPhaseResponse::class, 'phase_response');
	}
}
