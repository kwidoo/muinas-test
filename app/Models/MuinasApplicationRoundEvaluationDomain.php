<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApplicationRoundEvaluationDomain
 * 
 * @property int $id
 * @property int $application_round_domain
 * @property int $application_round_evaluation
 * @property string|null $domain_description
 * 
 * @property MuinasApplicationRoundEvaluation $muinas_application_round_evaluation
 * @property MuinasApplicationRoundDomain $muinas_application_round_domain
 *
 * @package App\Models
 */
class MuinasApplicationRoundEvaluationDomain extends Model
{
	use HasFactory;
	
	protected $table = 'muinas_application_round_evaluation_domain';
	public $timestamps = false;

	protected $casts = [
		'application_round_domain' => 'int',
		'application_round_evaluation' => 'int'
	];

	protected $fillable = [
		'application_round_domain',
		'application_round_evaluation',
		'domain_description'
	];

	public function muinas_application_round_evaluation()
	{
		return $this->belongsTo(MuinasApplicationRoundEvaluation::class, 'application_round_evaluation');
	}

	public function muinas_application_round_domain()
	{
		return $this->belongsTo(MuinasApplicationRoundDomain::class, 'application_round_domain');
	}
}
