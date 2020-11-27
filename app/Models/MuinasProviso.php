<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProviso
 * 
 * @property int $id
 * @property int|null $number
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $contact_person_name
 * @property string|null $contact_person_phone
 * @property string $contact_person_fax
 * @property string $contact_person_email
 * @property string|null $person_type
 * @property string|null $statedescription
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
 * @property string|null $decision
 * @property string|null $reject_decision
 * @property string|null $research_decision
 * @property bool|null $researched
 * @property string|null $confirm_decision
 * @property string|null $confirm_decision_tosign
 * @property string|null $company_contact_name
 * @property string|null $company_contact_phone
 * @property string|null $company_contact_email
 * @property string|null $company_contact_code
 * @property bool|null $research_required
 * @property bool|null $monitoring_required
 * @property string|null $title
 * @property Carbon|null $module_deadline
 * @property string|null $module_deadline_reason
 * @property int|null $module_person
 * @property string|null $module_person_reason
 * @property int|null $authority
 * @property Carbon|null $valid_until
 * @property bool|null $document_classified
 * @property int|null $provisoapplication
 * @property Carbon|null $confirm_date
 * @property int|null $signer
 * @property string|null $extend_decision
 * @property Carbon|null $extend_date
 * @property int|null $pdfextend
 * @property int|null $ddocextend
 * @property string|null $extend_decision_tosign
 * @property string|null $citizen_extend_comment
 * @property Carbon|null $citizen_extend_date
 * @property string|null $reject_decision_tosign
 * @property Carbon|null $reconfirm_date
 * @property string|null $admin_extend_comment
 * @property Carbon|null $admin_extend_date_comment
 * @property int|null $citizen_extend_ownerperson
 * @property int|null $admin_extend_person
 * @property string|null $invalid_decision_tosign
 * @property Carbon|null $invalid_date
 * @property int|null $pdfinvalid
 * @property int|null $ddocinvalid
 * @property string|null $invalid_decision
 * @property string|null $message_recipients
 * @property bool|null $send_two_weeks_notification_before_invalid
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasProviso|null $muinas_proviso
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property Collection|MuinasProviso[] $muinas_provisos
 * @property Collection|MuinasProvisoCompiller[] $muinas_proviso_compillers
 * @property Collection|MuinasProvisocounty[] $muinas_provisocounties
 * @property Collection|MuinasProvisoextrafile[] $muinas_provisoextrafiles
 * @property Collection|MuinasProvisoimage[] $muinas_provisoimages
 * @property Collection|MuinasProvisomonumentowner[] $muinas_provisomonumentowners
 *
 * @package App\Models
 */
class MuinasProviso extends Model
{
	protected $table = 'muinas_proviso';
	public $timestamps = false;

	protected $casts = [
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
		'researched' => 'bool',
		'research_required' => 'bool',
		'monitoring_required' => 'bool',
		'module_person' => 'int',
		'authority' => 'int',
		'document_classified' => 'bool',
		'provisoapplication' => 'int',
		'signer' => 'int',
		'pdfextend' => 'int',
		'ddocextend' => 'int',
		'citizen_extend_ownerperson' => 'int',
		'admin_extend_person' => 'int',
		'pdfinvalid' => 'int',
		'ddocinvalid' => 'int',
		'send_two_weeks_notification_before_invalid' => 'bool'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'module_deadline',
		'valid_until',
		'confirm_date',
		'extend_date',
		'citizen_extend_date',
		'reconfirm_date',
		'admin_extend_date_comment',
		'invalid_date'
	];

	protected $fillable = [
		'number',
		'name',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_fax',
		'contact_person_email',
		'person_type',
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
		'decision',
		'reject_decision',
		'research_decision',
		'researched',
		'confirm_decision',
		'confirm_decision_tosign',
		'company_contact_name',
		'company_contact_phone',
		'company_contact_email',
		'company_contact_code',
		'research_required',
		'monitoring_required',
		'title',
		'module_deadline',
		'module_deadline_reason',
		'module_person',
		'module_person_reason',
		'authority',
		'valid_until',
		'document_classified',
		'provisoapplication',
		'confirm_date',
		'signer',
		'extend_decision',
		'extend_date',
		'pdfextend',
		'ddocextend',
		'extend_decision_tosign',
		'citizen_extend_comment',
		'citizen_extend_date',
		'reject_decision_tosign',
		'reconfirm_date',
		'admin_extend_comment',
		'admin_extend_date_comment',
		'citizen_extend_ownerperson',
		'admin_extend_person',
		'invalid_decision_tosign',
		'invalid_date',
		'pdfinvalid',
		'ddocinvalid',
		'invalid_decision',
		'message_recipients',
		'send_two_weeks_notification_before_invalid'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'repaired');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_provisos()
	{
		return $this->hasMany(MuinasProviso::class, 'repaired');
	}

	public function muinas_proviso_compillers()
	{
		return $this->hasMany(MuinasProvisoCompiller::class, 'proviso');
	}

	public function muinas_provisocounties()
	{
		return $this->hasMany(MuinasProvisocounty::class, 'proviso');
	}

	public function muinas_provisoextrafiles()
	{
		return $this->hasMany(MuinasProvisoextrafile::class, 'proviso');
	}

	public function muinas_provisoimages()
	{
		return $this->hasMany(MuinasProvisoimage::class, 'proviso');
	}

	public function muinas_provisomonumentowners()
	{
		return $this->hasMany(MuinasProvisomonumentowner::class, 'proviso');
	}
}
