<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApplicationRoundEvaluation
 * 
 * @property int $id
 * @property string|null $type
 * @property string $title
 * @property string|null $description
 * @property string|null $yes_field
 * @property string|null $no_field
 * @property int|null $nb_evaluators
 * @property bool|null $scale_size
 * @property string|null $scores
 * @property string|null $serial_number
 * @property Carbon|null $created
 * @property int|null $application_round
 * @property int|null $preference_order
 * 
 * @property MuinasApplicationRound|null $muinas_application_round
 * @property Collection|MuinasApplicationRoundEvaluationDomain[] $muinas_application_round_evaluation_domains
 *
 * @package App\Models
 */
class MuinasApplicationRoundEvaluation extends Model
{
	use HasFactory;
	
	protected $table = 'muinas_application_round_evaluation';
	public $timestamps = false;

	protected $casts = [
		'nb_evaluators' => 'int',
		'scale_size' => 'bool',
		'application_round' => 'int',
		'preference_order' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'type',
		'title',
		'description',
		'yes_field',
		'no_field',
		'nb_evaluators',
		'scale_size',
		'scores',
		'serial_number',
		'created',
		'application_round',
		'preference_order'
	];

	public function muinas_application_round()
	{
		return $this->belongsTo(MuinasApplicationRound::class, 'application_round');
	}

	public function muinas_application_round_evaluation_domains()
	{
		return $this->hasMany(MuinasApplicationRoundEvaluationDomain::class, 'application_round_evaluation');
	}
}
