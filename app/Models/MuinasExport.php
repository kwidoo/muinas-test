<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasExport
 * 
 * @property int $id
 * @property int $nr
 * @property string $type
 * @property string|null $document_type
 * @property Carbon|null $startdate
 * @property string|null $place
 * @property Carbon|null $enddate
 * @property int|null $ownerperson
 * @property int|null $person
 * @property string $countrys
 * @property string $aim
 * @property string|null $tempaims
 * @property string|null $tempaimdesc
 * @property Carbon $created
 * @property string $status
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
 * @property string|null $receiver_realname
 * @property int|null $cultural_property_amount
 * @property string|null $documents
 * @property string|null $state
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property Carbon|null $signed
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property int|null $parent_id
 * @property Carbon|null $update_date
 * @property string|null $origin
 * @property Carbon|null $date_of_submission
 * @property string|null $decision
 * @property string|null $reason_create_permit
 * @property int|null $signed_person
 * @property bool|null $notification_20_days_before_expiration
 * @property bool|null $notification_export_date_has_been_exceeded
 * @property string|null $application_status
 * @property int|null $representative_county
 * @property int|null $representative_parish
 * @property int|null $county
 * @property int|null $parish
 * 
 * @property MuinasExport|null $muinas_export
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasExport[] $muinas_exports
 * @property MuinasExportComment $muinas_export_comment
 * @property Collection|MuinasExportEmailLog[] $muinas_export_email_logs
 * @property Collection|MuinasExportSubmittedDocument[] $muinas_export_submitted_documents
 * @property Collection|MuinasExportVersion[] $muinas_export_versions
 *
 * @package App\Models
 */
class MuinasExport extends Model
{
	protected $table = 'muinas_export';
	public $timestamps = false;

	protected $casts = [
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
		'pdf' => 'int',
		'ddoc' => 'int',
		'parent_id' => 'int',
		'signed_person' => 'int',
		'notification_20_days_before_expiration' => 'bool',
		'notification_export_date_has_been_exceeded' => 'bool',
		'representative_county' => 'int',
		'representative_parish' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'startdate',
		'enddate',
		'created',
		'date_of_reimportation',
		'signed',
		'submitted',
		'update_date',
		'date_of_submission'
	];

	protected $fillable = [
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
		'receiver_realname',
		'cultural_property_amount',
		'documents',
		'state',
		'pdf',
		'ddoc',
		'signed',
		'submitted',
		'adminstate',
		'parent_id',
		'update_date',
		'origin',
		'date_of_submission',
		'decision',
		'reason_create_permit',
		'signed_person',
		'notification_20_days_before_expiration',
		'notification_export_date_has_been_exceeded',
		'application_status',
		'representative_county',
		'representative_parish',
		'county',
		'parish'
	];

	public function muinas_export()
	{
		return $this->belongsTo(MuinasExport::class, 'parent_id');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_exports()
	{
		return $this->hasMany(MuinasExport::class, 'parent_id');
	}

	public function muinas_export_comment()
	{
		return $this->hasOne(MuinasExportComment::class, 'export_id');
	}

	public function muinas_export_email_logs()
	{
		return $this->hasMany(MuinasExportEmailLog::class, 'export_id');
	}

	public function muinas_export_submitted_documents()
	{
		return $this->hasMany(MuinasExportSubmittedDocument::class, 'export_id');
	}

	public function muinas_export_versions()
	{
		return $this->hasMany(MuinasExportVersion::class, 'export_id');
	}
}
