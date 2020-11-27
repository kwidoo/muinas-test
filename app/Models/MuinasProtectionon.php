<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProtectionon
 * 
 * @property int $id
 * @property int $number
 * @property string $type
 * @property Carbon $created
 * @property string $address
 * @property string $place
 * @property string $designation
 * @property int|null $alleviate
 * @property int $writer
 * @property int $person
 * @property bool|null $post
 * @property int|null $ownerperson
 * @property string $post_data
 * @property string $emiter
 * @property int $inmonument
 * @property string $cohesion
 * @property string $status
 * @property bool|null $emailed
 * @property int|null $emailedownerperson
 * @property Carbon|null $emaileddate
 * @property int|null $protectionemiter
 * @property int|null $old_unkown_ownerperson
 * @property string|null $issuer_at_signing
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 *
 * @package App\Models
 */
class MuinasProtectionon extends Model
{
	protected $table = 'muinas_protectionon';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'alleviate' => 'int',
		'writer' => 'int',
		'person' => 'int',
		'post' => 'bool',
		'ownerperson' => 'int',
		'inmonument' => 'int',
		'emailed' => 'bool',
		'emailedownerperson' => 'int',
		'protectionemiter' => 'int',
		'old_unkown_ownerperson' => 'int'
	];

	protected $dates = [
		'created',
		'emaileddate'
	];

	protected $fillable = [
		'number',
		'type',
		'created',
		'address',
		'place',
		'designation',
		'alleviate',
		'writer',
		'person',
		'post',
		'ownerperson',
		'post_data',
		'emiter',
		'inmonument',
		'cohesion',
		'status',
		'emailed',
		'emailedownerperson',
		'emaileddate',
		'protectionemiter',
		'old_unkown_ownerperson',
		'issuer_at_signing'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}
}
