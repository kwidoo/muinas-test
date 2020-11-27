<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasApproval
 * 
 * @property int $id
 * @property string $type
 * @property string|null $subtype
 * @property int|null $activitylicences_mark
 * @property string|null $competency_persontype
 * @property string|null $competency_name
 * @property string|null $competency_code
 * @property int|null $competency_county
 * @property int|null $competency_parish
 * @property string|null $competency_address
 * @property string|null $competency_email
 * @property string|null $competency_phone
 * @property int|null $creator_activitylicences_copy
 * @property int|null $creator_activitylicences_mark
 * @property string|null $creator_competency_persontype
 * @property string|null $creator_competency_name
 * @property string|null $creator_competency_code
 * @property int|null $creator_competency_county
 * @property int|null $creator_competency_parish
 * @property string|null $creator_competency_address
 * @property string|null $creator_competency_email
 * @property string|null $creator_competency_phone
 * @property int|null $mka_partner
 * @property int|null $mka_person
 * @property string|null $title
 * @property int|null $ehr
 * @property string|null $ehr_number
 * @property string|null $description
 * @property string|null $delivery
 * @property int|null $research
 * @property int|null $monitoring
 * @property int|null $document
 * @property int|null $ehr_notification
 * @property Carbon|null $date_of_submission
 * @property int|null $ownerperson
 * @property int|null $person
 * @property int|null $applicant_id
 * @property string|null $applicant_name
 * @property string|null $applicant_code
 * @property string|null $applicant_email
 * @property string|null $applicant_phone
 * @property string|null $reason
 * @property string|null $decision
 * @property string|null $message
 * @property string|null $status
 * @property int|null $ddoc
 * @property int|null $pdf
 * @property int|null $confirmed_ddoc
 * @property int|null $confirmed_pdf
 * @property int|null $extend_ddoc
 * @property int|null $extend_pdf
 * @property int|null $modify_ddoc
 * @property int|null $modify_pdf
 * @property Carbon|null $module_deadline
 * @property string|null $module_deadline_reason
 * @property int|null $module_person
 * @property string|null $module_person_reason
 * @property Carbon|null $module_deadline_default
 * @property Carbon|null $created
 * @property Carbon|null $updated
 * @property Carbon|null $deadline_date
 * @property Carbon|null $signed
 * @property Carbon|null $submitted
 * @property Carbon|null $confirmed_date
 * @property Carbon|null $modify_date
 * @property Carbon|null $extend_date
 * @property int|null $signer
 * @property string|null $state
 * @property string|null $adminstate
 * @property bool|null $document_classified
 * @property int|null $coordination
 * @property string|null $archaeological_survey_type
 * @property string|null $additional_info
 * @property int|null $worknotice
 * @property int|null $number
 * @property int|null $repaired
 * @property string|null $citizen_extend_date_description
 * @property Carbon|null $citizen_extend_date
 * @property int|null $editor_admin_id
 * @property int|null $editor_citizen_id
 * @property string|null $email_receivers
 * @property string|null $contact_person_name
 * @property string|null $contact_person_code
 * @property string|null $contact_person_phone
 * @property string|null $contact_person_email
 * @property string|null $manager_and_agency
 * @property string|null $object_data
 * @property string|null $aim_summary
 * @property string|null $explanations
 * @property string|null $description_area
 * @property string|null $findings
 * @property string|null $analyzes
 * @property Carbon|null $startoccurrence
 * @property Carbon|null $endoccurrence
 * @property int|null $citizen_extend_ownerperson
 * @property Carbon|null $admin_extend_date_comment
 * @property string|null $admin_extend_comment
 * @property int|null $admin_extend_person
 * 
 * @property Collection|MuinasApprovalmuinasobject[] $muinas_approvalmuinasobjects
 *
 * @package App\Models
 */
class MuinasApproval extends Model
{
	protected $table = 'muinas_approval';
	public $timestamps = false;

	protected $casts = [
		'activitylicences_mark' => 'int',
		'competency_county' => 'int',
		'competency_parish' => 'int',
		'creator_activitylicences_copy' => 'int',
		'creator_activitylicences_mark' => 'int',
		'creator_competency_county' => 'int',
		'creator_competency_parish' => 'int',
		'mka_partner' => 'int',
		'mka_person' => 'int',
		'ehr' => 'int',
		'research' => 'int',
		'monitoring' => 'int',
		'document' => 'int',
		'ehr_notification' => 'int',
		'ownerperson' => 'int',
		'person' => 'int',
		'applicant_id' => 'int',
		'ddoc' => 'int',
		'pdf' => 'int',
		'confirmed_ddoc' => 'int',
		'confirmed_pdf' => 'int',
		'extend_ddoc' => 'int',
		'extend_pdf' => 'int',
		'modify_ddoc' => 'int',
		'modify_pdf' => 'int',
		'module_person' => 'int',
		'signer' => 'int',
		'document_classified' => 'bool',
		'coordination' => 'int',
		'worknotice' => 'int',
		'number' => 'int',
		'repaired' => 'int',
		'editor_admin_id' => 'int',
		'editor_citizen_id' => 'int',
		'citizen_extend_ownerperson' => 'int',
		'admin_extend_person' => 'int'
	];

	protected $dates = [
		'date_of_submission',
		'module_deadline',
		'module_deadline_default',
		'created',
		'updated',
		'deadline_date',
		'signed',
		'submitted',
		'confirmed_date',
		'modify_date',
		'extend_date',
		'citizen_extend_date',
		'startoccurrence',
		'endoccurrence',
		'admin_extend_date_comment'
	];

	protected $fillable = [
		'type',
		'subtype',
		'activitylicences_mark',
		'competency_persontype',
		'competency_name',
		'competency_code',
		'competency_county',
		'competency_parish',
		'competency_address',
		'competency_email',
		'competency_phone',
		'creator_activitylicences_copy',
		'creator_activitylicences_mark',
		'creator_competency_persontype',
		'creator_competency_name',
		'creator_competency_code',
		'creator_competency_county',
		'creator_competency_parish',
		'creator_competency_address',
		'creator_competency_email',
		'creator_competency_phone',
		'mka_partner',
		'mka_person',
		'title',
		'ehr',
		'ehr_number',
		'description',
		'delivery',
		'research',
		'monitoring',
		'document',
		'ehr_notification',
		'date_of_submission',
		'ownerperson',
		'person',
		'applicant_id',
		'applicant_name',
		'applicant_code',
		'applicant_email',
		'applicant_phone',
		'reason',
		'decision',
		'message',
		'status',
		'ddoc',
		'pdf',
		'confirmed_ddoc',
		'confirmed_pdf',
		'extend_ddoc',
		'extend_pdf',
		'modify_ddoc',
		'modify_pdf',
		'module_deadline',
		'module_deadline_reason',
		'module_person',
		'module_person_reason',
		'module_deadline_default',
		'created',
		'updated',
		'deadline_date',
		'signed',
		'submitted',
		'confirmed_date',
		'modify_date',
		'extend_date',
		'signer',
		'state',
		'adminstate',
		'document_classified',
		'coordination',
		'archaeological_survey_type',
		'additional_info',
		'worknotice',
		'number',
		'repaired',
		'citizen_extend_date_description',
		'citizen_extend_date',
		'editor_admin_id',
		'editor_citizen_id',
		'email_receivers',
		'contact_person_name',
		'contact_person_code',
		'contact_person_phone',
		'contact_person_email',
		'manager_and_agency',
		'object_data',
		'aim_summary',
		'explanations',
		'description_area',
		'findings',
		'analyzes',
		'startoccurrence',
		'endoccurrence',
		'citizen_extend_ownerperson',
		'admin_extend_date_comment',
		'admin_extend_comment',
		'admin_extend_person'
	];

	public function muinas_approvalmuinasobjects()
	{
		return $this->hasMany(MuinasApprovalmuinasobject::class, 'approval');
	}
}
