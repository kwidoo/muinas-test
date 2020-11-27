<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApplicationRoundRequirement
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
 * @property Carbon|null $created
 * @property int|null $application_round
 * 
 * @property MuinasApplicationRound|null $muinas_application_round
 *
 * @package App\Models
 */
class MuinasApplicationRoundRequirement extends Model
{
	protected $table = 'muinas_application_round_requirements';
	public $timestamps = false;

	protected $casts = [
		'nb_evaluators' => 'int',
		'scale_size' => 'bool',
		'application_round' => 'int'
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
		'created',
		'application_round'
	];

	public function muinas_application_round()
	{
		return $this->belongsTo(MuinasApplicationRound::class, 'application_round');
	}
}
