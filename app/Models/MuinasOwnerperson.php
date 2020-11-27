<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasOwnerperson
 * 
 * @property int $id
 * @property int|null $uniqid
 * @property string $name
 * @property string $type
 * @property string $code
 * @property string|null $regorg
 * @property string|null $address
 * @property bool|null $classified
 * @property Carbon $created
 * @property Carbon|null $enddate
 * @property string $status
 * @property bool|null $noee
 * @property Carbon|null $updated
 * @property string|null $updateproblem
 * @property bool|null $updatenodata
 * @property string $email
 * @property string|null $phone
 * @property int|null $parent
 * @property bool|null $stateop
 * @property string|null $comment
 * @property int|null $successor
 * @property int|null $country
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $boundsindexed
 * @property int|null $person
 * 
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasActivitylicence[] $muinas_activitylicences
 * @property Collection|MuinasActivitylicenceBusiness[] $muinas_activitylicence_businesses
 * @property Collection|MuinasActivitylicenceSpecialist[] $muinas_activitylicence_specialists
 * @property Collection|MuinasAuthorisation[] $muinas_authorisations
 * @property Collection|MuinasAuthorisationapplicant[] $muinas_authorisationapplicants
 * @property Collection|MuinasBurialplace[] $muinas_burialplaces
 * @property Collection|MuinasCitizendivenotice[] $muinas_citizendivenotices
 * @property Collection|MuinasCitizendivenoticereport[] $muinas_citizendivenoticereports
 * @property Collection|MuinasConfidant[] $muinas_confidants
 * @property Collection|MuinasCoordination[] $muinas_coordinations
 * @property Collection|MuinasCoordinationprocessOwnernotice[] $muinas_coordinationprocess_ownernotices
 * @property Collection|MuinasCulturalvaluefinding[] $muinas_culturalvaluefindings
 * @property Collection|MuinasEmergencysupport[] $muinas_emergencysupports
 * @property Collection|MuinasEvmbuildingownerperson[] $muinas_evmbuildingownerpeople
 * @property Collection|MuinasExport[] $muinas_exports
 * @property Collection|MuinasFindacceptact[] $muinas_findacceptacts
 * @property Collection|MuinasGrantapplication[] $muinas_grantapplications
 * @property Collection|MuinasGrantapplicationmonumentowner[] $muinas_grantapplicationmonumentowners
 * @property Collection|MuinasGrantapplicationreport[] $muinas_grantapplicationreports
 * @property Collection|MuinasHeritageOwnerperson[] $muinas_heritage_ownerpeople
 * @property Collection|MuinasHeritageUpdateOpCatastarlunitOp[] $muinas_heritage_update_op_catastarlunit_ops
 * @property Collection|MuinasHeritageowner[] $muinas_heritageowners
 * @property Collection|MuinasIssuereport[] $muinas_issuereports
 * @property Collection|MuinasMemorandum[] $muinas_memorandums
 * @property Collection|MuinasMonumentowner[] $muinas_monumentowners
 * @property Collection|MuinasNotificationownerperson[] $muinas_notificationownerpeople
 * @property Collection|MuinasObservationprotocolownerperson[] $muinas_observationprotocolownerpeople
 * @property Collection|MuinasOwnerperson[] $muinas_ownerpeople
 * @property Collection|MuinasOwnerpersonNotice[] $muinas_ownerperson_notices
 * @property MuinasOwnerpersoneditlog $muinas_ownerpersoneditlog
 * @property Collection|MuinasOwnerpersonprotectionondeliver[] $muinas_ownerpersonprotectionondelivers
 * @property Collection|MuinasPreceptownerperson[] $muinas_preceptownerpeople
 * @property Collection|MuinasProtectionon[] $muinas_protectionons
 * @property Collection|MuinasProvisoapplication[] $muinas_provisoapplications
 * @property Collection|MuinasProvisoapplicationmonumentowner[] $muinas_provisoapplicationmonumentowners
 * @property Collection|MuinasProvisomonumentowner[] $muinas_provisomonumentowners
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property Collection|MuinasPypapplicationreport[] $muinas_pypapplicationreports
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 * @property Collection|MuinasSearchreportConfirmation[] $muinas_searchreport_confirmations
 * @property Collection|MuinasSearchreportOwnerperson[] $muinas_searchreport_ownerpeople
 * @property Collection|MuinasSearchreportOwnerpersonNotice[] $muinas_searchreport_ownerperson_notices
 * @property Collection|MuinasSeizedculturalproperty[] $muinas_seizedculturalproperties
 * @property Collection|MuinasWorkpermit[] $muinas_workpermits
 * @property Collection|MuinasWorkpermitapplication[] $muinas_workpermitapplications
 *
 * @package App\Models
 */
class MuinasOwnerperson extends Model
{
	protected $table = 'muinas_ownerperson';
	public $timestamps = false;

	protected $casts = [
		'uniqid' => 'int',
		'classified' => 'bool',
		'noee' => 'bool',
		'updatenodata' => 'bool',
		'parent' => 'int',
		'stateop' => 'bool',
		'successor' => 'int',
		'country' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created',
		'enddate',
		'updated',
		'boundsindexed'
	];

	protected $fillable = [
		'uniqid',
		'name',
		'type',
		'code',
		'regorg',
		'address',
		'classified',
		'created',
		'enddate',
		'status',
		'noee',
		'updated',
		'updateproblem',
		'updatenodata',
		'email',
		'phone',
		'parent',
		'stateop',
		'comment',
		'successor',
		'country',
		'county',
		'parish',
		'boundsindexed',
		'person'
	];

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'parent');
	}

	public function muinas_activitylicences()
	{
		return $this->hasMany(MuinasActivitylicence::class, 'ownerperson');
	}

	public function muinas_activitylicence_businesses()
	{
		return $this->hasMany(MuinasActivitylicenceBusiness::class, 'ownerperson');
	}

	public function muinas_activitylicence_specialists()
	{
		return $this->hasMany(MuinasActivitylicenceSpecialist::class, 'ownerperson');
	}

	public function muinas_authorisations()
	{
		return $this->hasMany(MuinasAuthorisation::class, 'ownerperson');
	}

	public function muinas_authorisationapplicants()
	{
		return $this->hasMany(MuinasAuthorisationapplicant::class, 'applicant');
	}

	public function muinas_burialplaces()
	{
		return $this->hasMany(MuinasBurialplace::class, 'ownerperson');
	}

	public function muinas_citizendivenotices()
	{
		return $this->hasMany(MuinasCitizendivenotice::class, 'creater');
	}

	public function muinas_citizendivenoticereports()
	{
		return $this->hasMany(MuinasCitizendivenoticereport::class, 'creater');
	}

	public function muinas_confidants()
	{
		return $this->hasMany(MuinasConfidant::class, 'ownerperson');
	}

	public function muinas_coordinations()
	{
		return $this->hasMany(MuinasCoordination::class, 'ownerperson');
	}

	public function muinas_coordinationprocess_ownernotices()
	{
		return $this->hasMany(MuinasCoordinationprocessOwnernotice::class, 'ownerperson');
	}

	public function muinas_culturalvaluefindings()
	{
		return $this->hasMany(MuinasCulturalvaluefinding::class, 'maintenanceownerperson');
	}

	public function muinas_emergencysupports()
	{
		return $this->hasMany(MuinasEmergencysupport::class, 'ownerperson');
	}

	public function muinas_evmbuildingownerpeople()
	{
		return $this->hasMany(MuinasEvmbuildingownerperson::class, 'ownerperson');
	}

	public function muinas_exports()
	{
		return $this->hasMany(MuinasExport::class, 'ownerperson');
	}

	public function muinas_findacceptacts()
	{
		return $this->hasMany(MuinasFindacceptact::class, 'ownerperson');
	}

	public function muinas_grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'ownerperson');
	}

	public function muinas_grantapplicationmonumentowners()
	{
		return $this->hasMany(MuinasGrantapplicationmonumentowner::class, 'ownerperson');
	}

	public function muinas_grantapplicationreports()
	{
		return $this->hasMany(MuinasGrantapplicationreport::class, 'creater');
	}

	public function muinas_heritage_ownerpeople()
	{
		return $this->hasMany(MuinasHeritageOwnerperson::class, 'ownerperson');
	}

	public function muinas_heritage_update_op_catastarlunit_ops()
	{
		return $this->hasMany(MuinasHeritageUpdateOpCatastarlunitOp::class, 'ownerperson');
	}

	public function muinas_heritageowners()
	{
		return $this->hasMany(MuinasHeritageowner::class, 'ownerperson');
	}

	public function muinas_issuereports()
	{
		return $this->hasMany(MuinasIssuereport::class, 'ownerperson');
	}

	public function muinas_memorandums()
	{
		return $this->hasMany(MuinasMemorandum::class, 'ownerperson');
	}

	public function muinas_monumentowners()
	{
		return $this->hasMany(MuinasMonumentowner::class, 'ownerperson');
	}

	public function muinas_notificationownerpeople()
	{
		return $this->hasMany(MuinasNotificationownerperson::class, 'ownerperson');
	}

	public function muinas_observationprotocolownerpeople()
	{
		return $this->hasMany(MuinasObservationprotocolownerperson::class, 'ownerperson');
	}

	public function muinas_ownerpeople()
	{
		return $this->hasMany(MuinasOwnerperson::class, 'parent');
	}

	public function muinas_ownerperson_notices()
	{
		return $this->hasMany(MuinasOwnerpersonNotice::class, 'ownerperson');
	}

	public function muinas_ownerpersoneditlog()
	{
		return $this->hasOne(MuinasOwnerpersoneditlog::class, 'ownerperson');
	}

	public function muinas_ownerpersonprotectionondelivers()
	{
		return $this->hasMany(MuinasOwnerpersonprotectionondeliver::class, 'ownerperson');
	}

	public function muinas_preceptownerpeople()
	{
		return $this->hasMany(MuinasPreceptownerperson::class, 'ownerperson');
	}

	public function muinas_protectionons()
	{
		return $this->hasMany(MuinasProtectionon::class, 'ownerperson');
	}

	public function muinas_provisoapplications()
	{
		return $this->hasMany(MuinasProvisoapplication::class, 'ownerperson');
	}

	public function muinas_provisoapplicationmonumentowners()
	{
		return $this->hasMany(MuinasProvisoapplicationmonumentowner::class, 'ownerperson');
	}

	public function muinas_provisomonumentowners()
	{
		return $this->hasMany(MuinasProvisomonumentowner::class, 'ownerperson');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'ownerperson');
	}

	public function muinas_pypapplicationreports()
	{
		return $this->hasMany(MuinasPypapplicationreport::class, 'creater');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'creater');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'creater');
	}

	public function muinas_searchreport_confirmations()
	{
		return $this->hasMany(MuinasSearchreportConfirmation::class, 'creater');
	}

	public function muinas_searchreport_ownerpeople()
	{
		return $this->hasMany(MuinasSearchreportOwnerperson::class, 'ownerperson');
	}

	public function muinas_searchreport_ownerperson_notices()
	{
		return $this->hasMany(MuinasSearchreportOwnerpersonNotice::class, 'ownerperson');
	}

	public function muinas_seizedculturalproperties()
	{
		return $this->hasMany(MuinasSeizedculturalproperty::class, 'maintenanceownerperson');
	}

	public function muinas_workpermits()
	{
		return $this->hasMany(MuinasWorkpermit::class, 'ownerperson');
	}

	public function muinas_workpermitapplications()
	{
		return $this->hasMany(MuinasWorkpermitapplication::class, 'ownerperson');
	}
}
