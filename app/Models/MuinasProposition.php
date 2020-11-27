<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProposition
 * 
 * @property int $id
 * @property int|null $type
 * @property string|null $number
 * @property string|null $object_name
 * @property string|null $address
 * @property string|null $ads_oid
 * @property bool|null $no_address
 * @property string|null $reason
 * @property int|null $sender
 * @property bool|null $sender_type
 * @property int|null $proposition_owner
 * @property int|null $monument_id
 * @property int|null $monument_id_history
 * @property int|null $phase_id
 * @property Carbon|null $created
 * @property bool|null $status
 * @property int|null $parent_id
 * @property string|null $notification_sent
 * @property int|null $sub_manager_id
 * @property string|null $files
 * 
 * @property MuinasPropositionPhase|null $muinas_proposition_phase
 * @property Collection|MuinasPropositionPhase[] $muinas_proposition_phases
 * @property Collection|MuinasPropositionVersion[] $muinas_proposition_versions
 * @property Collection|MuinasPropositionsLink[] $muinas_propositions_links
 *
 * @package App\Models
 */
class MuinasProposition extends Model
{
	protected $table = 'muinas_propositions';
	public $timestamps = false;

	protected $casts = [
		'type' => 'int',
		'no_address' => 'bool',
		'sender' => 'int',
		'sender_type' => 'bool',
		'proposition_owner' => 'int',
		'monument_id' => 'int',
		'monument_id_history' => 'int',
		'phase_id' => 'int',
		'status' => 'bool',
		'parent_id' => 'int',
		'sub_manager_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'type',
		'number',
		'object_name',
		'address',
		'ads_oid',
		'no_address',
		'reason',
		'sender',
		'sender_type',
		'proposition_owner',
		'monument_id',
		'monument_id_history',
		'phase_id',
		'created',
		'status',
		'parent_id',
		'notification_sent',
		'sub_manager_id',
		'files'
	];

	public function muinas_proposition_phase()
	{
		return $this->belongsTo(MuinasPropositionPhase::class, 'phase_id');
	}

	public function muinas_proposition_phases()
	{
		return $this->hasMany(MuinasPropositionPhase::class, 'proposition_id');
	}

	public function muinas_proposition_versions()
	{
		return $this->hasMany(MuinasPropositionVersion::class, 'proposition_id');
	}

	public function muinas_propositions_links()
	{
		return $this->hasMany(MuinasPropositionsLink::class, 'proposition_id');
	}
}
