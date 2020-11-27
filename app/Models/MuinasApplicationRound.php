<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MuinasApplicationRound extends Model
{
	use HasFactory;

	protected $table = 'muinas_application_round';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'repaired' => 'int',
		'ownerperson' => 'int',
		'person' => 'int',
		'budget' => 'float',
		'hidden' => 'bool',
		'editor_admin_id' => 'int',
		'editor_citizen_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date',
		'created'
	];

	protected $fillable = [
		'number',
		'repaired',
		'ownerperson',
		'person',
		'title',
		'description',
		'start_date',
		'end_date',
		'budget',
		'hidden',
		'created',
		'status',
		'type',
		'editor_admin_id',
		'editor_citizen_id'
	];

	/**
	 * @return BelongsTo
	 */
	public function application_round_domains(): HasMany
	{
		return $this->hasMany(MuinasApplicationRoundDomain::class, 'application_round', 'id');
	}

	/**
	 * @return HasMany
	 */
	public function application_round_evaluations(): HasMany
	{
		return $this->hasMany(MuinasApplicationRoundEvaluation::class, 'application_round', 'id');
	}

	/**
	 * @return HasMany
	 */
	public function application_round_requirements(): HasMany
	{
		return $this->hasMany(MuinasApplicationRoundRequirement::class, 'application_round');
	}

	public function person_entity(): BelongsTo
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
