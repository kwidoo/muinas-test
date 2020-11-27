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
 * Class MuinasApplicationRoundDomain
 * 
 * @property int $id
 * @property string $domain
 * @property Carbon|null $created
 * @property int|null $parent
 * @property int|null $application_round
 * 
 * @property MuinasApplicationRound|null $muinas_application_round
 * @property Collection|MuinasApplicationRoundEvaluationDomain[] $muinas_application_round_evaluation_domains
 * @property Collection|MuinasGrantapplication[] $muinas_grantapplications
 *
 * @package App\Models
 */
class MuinasApplicationRoundDomain extends Model
{
	use HasFactory;
	
	protected $table = 'muinas_application_round_domain';
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'application_round' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'domain',
		'created',
		'parent',
		'application_round'
	];

	public function application_round()
	{
		return $this->belongsTo(MuinasApplicationRound::class, 'application_round');
	}

	public function application_round_evaluation_domains()
	{
		return $this->hasMany(MuinasApplicationRoundEvaluationDomain::class, 'application_round_domain');
	}

	public function grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'domain');
	}
}
