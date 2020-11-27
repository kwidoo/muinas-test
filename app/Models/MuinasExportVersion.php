<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExportVersion
 * 
 * @property int $id
 * @property int|null $export_id
 * @property int|null $nr
 * @property string|null $type
 * @property string|null $document_type
 * @property Carbon|null $startdate
 * @property string|null $place
 * @property Carbon|null $enddate
 * @property int|null $ownerperson
 * @property int|null $person
 * @property string|null $countrys
 * @property string|null $aim
 * @property string|null $tempaims
 * @property string|null $tempaimdesc
 * @property Carbon|null $created
 * @property string|null $status
 * @property bool|null $returned
 * @property bool|null $notused
 * @property string|null $pcode
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $realname
 * @property int|null $country
 * @property bool|null $is_representative
 * @property int|null $representative_person_id
 * @property string|null $representative_realname
 * @property string|null $representative_address
 * @property Carbon|null $date_of_reimportation
 * @property int|null $receiver_user_id
 * @property int|null $cultural_property_amount
 * @property string|null $documents
 * @property string|null $changed_fields
 * @property string|null $state_fee_files_filebank_id
 * @property int|null $version_number
 * @property string|null $receiver_realname
 * @property string|null $origin
 * @property Carbon|null $date_of_submission
 * @property Carbon|null $update_date
 * @property string|null $decision
 * @property string|null $submitted_documents_filebank_id
 * @property string|null $state
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property int|null $signed_person
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property int|null $parent_id
 * @property int|null $editor_admin_id
 * @property int|null $editor_citizen_id
 * @property string|null $application_status
 * 
 * @property MuinasExport|null $muinas_export
 *
 * @package App\Models
 */
class MuinasExportVersion extends Model
{
	protected $table = 'muinas_export_versions';
	public $timestamps = false;

	protected $casts = [
		'export_id' => 'int',
		'nr' => 'int',
		'ownerperson' => 'int',
		'person' => 'int',
		'returned' => 'bool',
		'notused' => 'bool',
		'country' => 'int',
		'is_representative' => 'bool',
		'representative_person_id' => 'int',
		'receiver_user_id' => 'int',
		'cultural_property_amount' => 'int',
		'version_number' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'signed_person' => 'int',
		'parent_id' => 'int',
		'editor_admin_id' => 'int',
		'editor_citizen_id' => 'int'
	];

	protected $dates = [
		'startdate',
		'enddate',
		'created',
		'date_of_reimportation',
		'date_of_submission',
		'update_date',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'export_id',
		'nr',
		'type',
		'document_type',
		'startdate',
		'place',
		'enddate',
		'ownerperson',
		'person',
		'countrys',
		'aim',
		'tempaims',
		'tempaimdesc',
		'created',
		'status',
		'returned',
		'notused',
		'pcode',
		'address',
		'phone',
		'email',
		'realname',
		'country',
		'is_representative',
		'representative_person_id',
		'representative_realname',
		'representative_address',
		'date_of_reimportation',
		'receiver_user_id',
		'cultural_property_amount',
		'documents',
		'changed_fields',
		'state_fee_files_filebank_id',
		'version_number',
		'receiver_realname',
		'origin',
		'date_of_submission',
		'update_date',
		'decision',
		'submitted_documents_filebank_id',
		'state',
		'pdf',
		'ddoc',
		'signed',
		'signed_person',
		'submitted',
		'adminstate',
		'parent_id',
		'editor_admin_id',
		'editor_citizen_id',
		'application_status'
	];

	public function muinas_export()
	{
		return $this->belongsTo(MuinasExport::class, 'export_id');
	}
}
