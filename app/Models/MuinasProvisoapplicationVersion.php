<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationVersion
 * 
 * @property int $id
 * @property int|null $provisoapplication_id
 * @property int|null $number
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $contact_person_name
 * @property string $contact_person_phone
 * @property string|null $contact_person_fax
 * @property string $contact_person_email
 * @property string $statedescription
 * @property string $workstartconfirm
 * @property int|null $mandate
 * @property Carbon $created
 * @property string|null $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int $creater
 * @property int|null $ownerperson
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property string|null $plandata
 * @property string $signtype
 * @property string|null $delivery
 * @property string|null $changed_fields
 * @property int|null $version_number
 * @property string|null $decision
 * @property int|null $editor_admin_id
 * @property int|null $editor_citizen_id
 *
 * @package App\Models
 */
class MuinasProvisoapplicationVersion extends Model
{
	protected $table = 'muinas_provisoapplication_versions';
	public $timestamps = false;

	protected $casts = [
		'provisoapplication_id' => 'int',
		'number' => 'int',
		'mandate' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'version_number' => 'int',
		'editor_admin_id' => 'int',
		'editor_citizen_id' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed'
	];

	protected $fillable = [
		'provisoapplication_id',
		'number',
		'name',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_fax',
		'contact_person_email',
		'statedescription',
		'workstartconfirm',
		'mandate',
		'created',
		'state',
		'modified',
		'pdf',
		'ddoc',
		'lang',
		'creater',
		'ownerperson',
		'county',
		'parish',
		'signed',
		'person',
		'message',
		'repaired',
		'plandata',
		'signtype',
		'delivery',
		'changed_fields',
		'version_number',
		'decision',
		'editor_admin_id',
		'editor_citizen_id'
	];
}
