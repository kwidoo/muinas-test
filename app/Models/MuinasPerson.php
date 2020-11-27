<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPerson
 * 
 * @property int $id
 * @property int $user
 * @property string $realname
 * @property string $pcode
 * @property string $jobname
 * @property Carbon|null $startdate
 * @property Carbon|null $enddate
 * @property string $email
 * @property string $phone
 * @property bool|null $passiv
 * @property bool|null $noticeemail
 * @property bool|null $noticesession
 * @property string $monumentfilter
 * @property string $monumentlist
 * @property Carbon|null $noticeemailsent
 * @property Carbon|null $lastnoticestamp
 * @property Carbon|null $lastlogin
 * @property int|null $authority
 * 
 * @property Collection|MuinasCitizendivenoticereport[] $muinas_citizendivenoticereports
 * @property Collection|MuinasCitizendivenoticereportreissue[] $muinas_citizendivenoticereportreissues
 * @property Collection|MuinasCoordination[] $muinas_coordinations
 * @property Collection|MuinasCoordinationprocess[] $muinas_coordinationprocesses
 * @property Collection|MuinasCoordinationprocessApprove[] $muinas_coordinationprocess_approves
 * @property Collection|MuinasCoordinationprocessArchived[] $muinas_coordinationprocess_archiveds
 * @property Collection|MuinasCoordinationprocessComment[] $muinas_coordinationprocess_comments
 * @property Collection|MuinasCoordinationprocessIssued[] $muinas_coordinationprocess_issueds
 * @property Collection|MuinasCoordinationprocessReferralPerson[] $muinas_coordinationprocess_referral_people
 * @property Collection|MuinasDivenotice[] $muinas_divenotices
 * @property Collection|MuinasEvmbuilding[] $muinas_evmbuildings
 * @property Collection|MuinasEvmbuildingfile[] $muinas_evmbuildingfiles
 * @property Collection|MuinasFindacceptact[] $muinas_findacceptacts
 * @property Collection|MuinasGrantapplication[] $muinas_grantapplications
 * @property Collection|MuinasGrantapplicationControl[] $muinas_grantapplication_controls
 * @property Collection|MuinasGrantapplicationcontractfile[] $muinas_grantapplicationcontractfiles
 * @property Collection|MuinasGrantapplicationinternalfile[] $muinas_grantapplicationinternalfiles
 * @property Collection|MuinasGrantapplicationoriginalfile[] $muinas_grantapplicationoriginalfiles
 * @property Collection|MuinasGrantapplicationreissue[] $muinas_grantapplicationreissues
 * @property Collection|MuinasGrantapplicationreport[] $muinas_grantapplicationreports
 * @property Collection|MuinasGrantapplicationreportoriginalfile[] $muinas_grantapplicationreportoriginalfiles
 * @property Collection|MuinasGrantapplicationreportreissue[] $muinas_grantapplicationreportreissues
 * @property Collection|MuinasHeritagealleviate[] $muinas_heritagealleviates
 * @property Collection|MuinasHeritagedescription[] $muinas_heritagedescriptions
 * @property Collection|MuinasHeritagefile[] $muinas_heritagefiles
 * @property Collection|MuinasHeritageinspection[] $muinas_heritageinspections
 * @property Collection|MuinasHeritageinventory[] $muinas_heritageinventories
 * @property Collection|MuinasHeritagelink[] $muinas_heritagelinks
 * @property Collection|MuinasHeritageobjectmeeting[] $muinas_heritageobjectmeetings
 * @property Collection|MuinasMemorandum[] $muinas_memorandums
 * @property Collection|MuinasMonument[] $muinas_monuments
 * @property Collection|MuinasMonumentDeprotectionprocess[] $muinas_monument_deprotectionprocesses
 * @property Collection|MuinasMonumentDeprotectionprocessPhase[] $muinas_monument_deprotectionprocess_phases
 * @property Collection|MuinasMonumentDeprotectionprocessPhasePerson[] $muinas_monument_deprotectionprocess_phase_people
 * @property Collection|MuinasMonumentProtectionprocessPhase[] $muinas_monument_protectionprocess_phases
 * @property Collection|MuinasMonumentProtectionprocessPhasePerson[] $muinas_monument_protectionprocess_phase_people
 * @property Collection|MuinasMonumentfile[] $muinas_monumentfiles
 * @property Collection|MuinasMonumentinventory[] $muinas_monumentinventories
 * @property Collection|MuinasMonumentlink[] $muinas_monumentlinks
 * @property Collection|MuinasMuinasobjectStatisticCmState[] $muinas_muinasobject_statistic_cm_states
 * @property Collection|MuinasMuinasobjectStatisticRelation[] $muinas_muinasobject_statistic_relations
 * @property Collection|MuinasObservationprotocol[] $muinas_observationprotocols
 * @property Collection|MuinasObservationprotocolcoinspector[] $muinas_observationprotocolcoinspectors
 * @property MuinasPlaceinfoPostgi $muinas_placeinfo_postgi
 * @property Collection|MuinasPlaceinfocomment[] $muinas_placeinfocomments
 * @property Collection|MuinasPlaceinfocoordinatefile[] $muinas_placeinfocoordinatefiles
 * @property Collection|MuinasPlaceinfopostgisindexdatum[] $muinas_placeinfopostgisindexdata
 * @property Collection|MuinasPlaceinfopostgisindexmain[] $muinas_placeinfopostgisindexmains
 * @property Collection|MuinasProvisoCompiller[] $muinas_proviso_compillers
 * @property Collection|MuinasProvisoDraftCompiller[] $muinas_proviso_draft_compillers
 * @property Collection|MuinasProvisoapplication[] $muinas_provisoapplications
 * @property Collection|MuinasProvisoapplicationoriginalfile[] $muinas_provisoapplicationoriginalfiles
 * @property Collection|MuinasProvisoapplicationreissue[] $muinas_provisoapplicationreissues
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property Collection|MuinasPypapplicationcontractfile[] $muinas_pypapplicationcontractfiles
 * @property Collection|MuinasPypapplicationoriginalfile[] $muinas_pypapplicationoriginalfiles
 * @property Collection|MuinasPypapplicationreissue[] $muinas_pypapplicationreissues
 * @property Collection|MuinasPypapplicationreport[] $muinas_pypapplicationreports
 * @property Collection|MuinasPypapplicationreportoriginalfile[] $muinas_pypapplicationreportoriginalfiles
 * @property Collection|MuinasPypapplicationreportreissue[] $muinas_pypapplicationreportreissues
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchapplicationrequestfile[] $muinas_searchapplicationrequestfiles
 * @property Collection|MuinasSearchapplicationrequestreissue[] $muinas_searchapplicationrequestreissues
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 * @property Collection|MuinasSearchreportfile[] $muinas_searchreportfiles
 * @property Collection|MuinasSearchreportreissue[] $muinas_searchreportreissues
 * @property Collection|MuinasSystemnoticeperson[] $muinas_systemnoticepeople
 *
 * @package App\Models
 */
class MuinasPerson extends Model
{
	protected $table = 'muinas_person';
	public $timestamps = false;

	protected $casts = [
		'user' => 'int',
		'passiv' => 'bool',
		'noticeemail' => 'bool',
		'noticesession' => 'bool',
		'authority' => 'int'
	];

	protected $dates = [
		'startdate',
		'enddate',
		'noticeemailsent',
		'lastnoticestamp',
		'lastlogin'
	];

	protected $fillable = [
		'user',
		'realname',
		'pcode',
		'jobname',
		'startdate',
		'enddate',
		'email',
		'phone',
		'passiv',
		'noticeemail',
		'noticesession',
		'monumentfilter',
		'monumentlist',
		'noticeemailsent',
		'lastnoticestamp',
		'lastlogin',
		'authority'
	];

	public function muinas_citizendivenoticereports()
	{
		return $this->hasMany(MuinasCitizendivenoticereport::class, 'inserter');
	}

	public function muinas_citizendivenoticereportreissues()
	{
		return $this->hasMany(MuinasCitizendivenoticereportreissue::class, 'person');
	}

	public function muinas_coordinations()
	{
		return $this->hasMany(MuinasCoordination::class, 'issuer');
	}

	public function muinas_coordinationprocesses()
	{
		return $this->hasMany(MuinasCoordinationprocess::class, 'person');
	}

	public function muinas_coordinationprocess_approves()
	{
		return $this->hasMany(MuinasCoordinationprocessApprove::class, 'person');
	}

	public function muinas_coordinationprocess_archiveds()
	{
		return $this->hasMany(MuinasCoordinationprocessArchived::class, 'person');
	}

	public function muinas_coordinationprocess_comments()
	{
		return $this->hasMany(MuinasCoordinationprocessComment::class, 'person');
	}

	public function muinas_coordinationprocess_issueds()
	{
		return $this->hasMany(MuinasCoordinationprocessIssued::class, 'person');
	}

	public function muinas_coordinationprocess_referral_people()
	{
		return $this->hasMany(MuinasCoordinationprocessReferralPerson::class, 'person');
	}

	public function muinas_divenotices()
	{
		return $this->hasMany(MuinasDivenotice::class, 'person');
	}

	public function muinas_evmbuildings()
	{
		return $this->hasMany(MuinasEvmbuilding::class, 'person');
	}

	public function muinas_evmbuildingfiles()
	{
		return $this->hasMany(MuinasEvmbuildingfile::class, 'person');
	}

	public function muinas_findacceptacts()
	{
		return $this->hasMany(MuinasFindacceptact::class, 'person');
	}

	public function muinas_grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'person');
	}

	public function muinas_grantapplication_controls()
	{
		return $this->hasMany(MuinasGrantapplicationControl::class, 'inspector');
	}

	public function muinas_grantapplicationcontractfiles()
	{
		return $this->hasMany(MuinasGrantapplicationcontractfile::class, 'person');
	}

	public function muinas_grantapplicationinternalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationinternalfile::class, 'person');
	}

	public function muinas_grantapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationoriginalfile::class, 'person');
	}

	public function muinas_grantapplicationreissues()
	{
		return $this->hasMany(MuinasGrantapplicationreissue::class, 'person');
	}

	public function muinas_grantapplicationreports()
	{
		return $this->hasMany(MuinasGrantapplicationreport::class, 'person');
	}

	public function muinas_grantapplicationreportoriginalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationreportoriginalfile::class, 'person');
	}

	public function muinas_grantapplicationreportreissues()
	{
		return $this->hasMany(MuinasGrantapplicationreportreissue::class, 'person');
	}

	public function muinas_heritagealleviates()
	{
		return $this->hasMany(MuinasHeritagealleviate::class, 'person');
	}

	public function muinas_heritagedescriptions()
	{
		return $this->hasMany(MuinasHeritagedescription::class, 'person');
	}

	public function muinas_heritagefiles()
	{
		return $this->hasMany(MuinasHeritagefile::class, 'person');
	}

	public function muinas_heritageinspections()
	{
		return $this->hasMany(MuinasHeritageinspection::class, 'person');
	}

	public function muinas_heritageinventories()
	{
		return $this->hasMany(MuinasHeritageinventory::class, 'person');
	}

	public function muinas_heritagelinks()
	{
		return $this->hasMany(MuinasHeritagelink::class, 'person');
	}

	public function muinas_heritageobjectmeetings()
	{
		return $this->hasMany(MuinasHeritageobjectmeeting::class, 'person');
	}

	public function muinas_memorandums()
	{
		return $this->hasMany(MuinasMemorandum::class, 'person');
	}

	public function muinas_monuments()
	{
		return $this->hasMany(MuinasMonument::class, 'protectionprocess_finalize_person');
	}

	public function muinas_monument_deprotectionprocesses()
	{
		return $this->hasMany(MuinasMonumentDeprotectionprocess::class, 'finalizer');
	}

	public function muinas_monument_deprotectionprocess_phases()
	{
		return $this->hasMany(MuinasMonumentDeprotectionprocessPhase::class, 'solverperson');
	}

	public function muinas_monument_deprotectionprocess_phase_people()
	{
		return $this->hasMany(MuinasMonumentDeprotectionprocessPhasePerson::class, 'person');
	}

	public function muinas_monument_protectionprocess_phases()
	{
		return $this->hasMany(MuinasMonumentProtectionprocessPhase::class, 'solverperson');
	}

	public function muinas_monument_protectionprocess_phase_people()
	{
		return $this->hasMany(MuinasMonumentProtectionprocessPhasePerson::class, 'person');
	}

	public function muinas_monumentfiles()
	{
		return $this->hasMany(MuinasMonumentfile::class, 'person');
	}

	public function muinas_monumentinventories()
	{
		return $this->hasMany(MuinasMonumentinventory::class, 'person');
	}

	public function muinas_monumentlinks()
	{
		return $this->hasMany(MuinasMonumentlink::class, 'person');
	}

	public function muinas_muinasobject_statistic_cm_states()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticCmState::class, 'person');
	}

	public function muinas_muinasobject_statistic_relations()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticRelation::class, 'person');
	}

	public function muinas_observationprotocols()
	{
		return $this->hasMany(MuinasObservationprotocol::class, 'inspector');
	}

	public function muinas_observationprotocolcoinspectors()
	{
		return $this->hasMany(MuinasObservationprotocolcoinspector::class, 'person');
	}

	public function muinas_placeinfo_postgi()
	{
		return $this->hasOne(MuinasPlaceinfoPostgi::class, 'person');
	}

	public function muinas_placeinfocomments()
	{
		return $this->hasMany(MuinasPlaceinfocomment::class, 'person');
	}

	public function muinas_placeinfocoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfocoordinatefile::class, 'person');
	}

	public function muinas_placeinfopostgisindexdata()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatum::class, 'person');
	}

	public function muinas_placeinfopostgisindexmains()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexmain::class, 'person');
	}

	public function muinas_proviso_compillers()
	{
		return $this->hasMany(MuinasProvisoCompiller::class, 'compiller');
	}

	public function muinas_proviso_draft_compillers()
	{
		return $this->hasMany(MuinasProvisoDraftCompiller::class, 'compiller');
	}

	public function muinas_provisoapplications()
	{
		return $this->hasMany(MuinasProvisoapplication::class, 'person');
	}

	public function muinas_provisoapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasProvisoapplicationoriginalfile::class, 'person');
	}

	public function muinas_provisoapplicationreissues()
	{
		return $this->hasMany(MuinasProvisoapplicationreissue::class, 'person');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'person');
	}

	public function muinas_pypapplicationcontractfiles()
	{
		return $this->hasMany(MuinasPypapplicationcontractfile::class, 'person');
	}

	public function muinas_pypapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationoriginalfile::class, 'person');
	}

	public function muinas_pypapplicationreissues()
	{
		return $this->hasMany(MuinasPypapplicationreissue::class, 'person');
	}

	public function muinas_pypapplicationreports()
	{
		return $this->hasMany(MuinasPypapplicationreport::class, 'person');
	}

	public function muinas_pypapplicationreportoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationreportoriginalfile::class, 'person');
	}

	public function muinas_pypapplicationreportreissues()
	{
		return $this->hasMany(MuinasPypapplicationreportreissue::class, 'person');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'person');
	}

	public function muinas_searchapplicationrequestfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequestfile::class, 'person');
	}

	public function muinas_searchapplicationrequestreissues()
	{
		return $this->hasMany(MuinasSearchapplicationrequestreissue::class, 'person');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'person');
	}

	public function muinas_searchreportfiles()
	{
		return $this->hasMany(MuinasSearchreportfile::class, 'person');
	}

	public function muinas_searchreportreissues()
	{
		return $this->hasMany(MuinasSearchreportreissue::class, 'person');
	}

	public function muinas_systemnoticepeople()
	{
		return $this->hasMany(MuinasSystemnoticeperson::class, 'person');
	}
}
