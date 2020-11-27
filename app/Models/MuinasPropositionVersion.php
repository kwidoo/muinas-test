<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPropositionVersion
 * 
 * @property int $id
 * @property int|null $proposition_id
 * @property Carbon|null $created
 * @property int $creator_type
 * @property bool|null $type
 * @property string|null $number
 * @property string|null $object_name
 * @property string|null $address
 * @property string|null $ads_oid
 * @property string|null $no_address
 * @property string|null $reason
 * @property string|null $comment
 * @property bool|null $status
 * @property bool|null $proposition_sender_type
 * @property int|null $proposition_sender
 * @property int|null $proposition_owner
 * @property int|null $monument_id
 * @property string|null $files
 * 
 * @property MuinasProposition|null $muinas_proposition
 *
 * @package App\Models
 */
class MuinasPropositionVersion extends Model
{
	protected $table = 'muinas_proposition_version';
	public $timestamps = false;

	protected $casts = [
		'proposition_id' => 'int',
		'creator_type' => 'int',
		'type' => 'bool',
		'status' => 'bool',
		'proposition_sender_type' => 'bool',
		'proposition_sender' => 'int',
		'proposition_owner' => 'int',
		'monument_id' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'proposition_id',
		'created',
		'creator_type',
		'type',
		'number',
		'object_name',
		'address',
		'ads_oid',
		'no_address',
		'reason',
		'comment',
		'status',
		'proposition_sender_type',
		'proposition_sender',
		'proposition_owner',
		'monument_id',
		'files'
	];

	public function muinas_proposition()
	{
		return $this->belongsTo(MuinasProposition::class, 'proposition_id');
	}
}
