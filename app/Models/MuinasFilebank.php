<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFilebank
 * 
 * @property int $id
 * @property int $size
 * @property Carbon $created
 * @property Carbon|null $ceased
 * @property string $name
 * @property string $mime
 * @property string $type
 * @property string|null $extradata
 * 
 * @property Collection|MuinasActivitylicenceSpecialistsCommentExtrafile[] $muinas_activitylicence_specialists_comment_extrafiles
 * @property Collection|MuinasAuthorisation[] $muinas_authorisations
 * @property Collection|MuinasAuthorisationfile[] $muinas_authorisationfiles
 * @property Collection|MuinasCitizendivenoticereportfile[] $muinas_citizendivenoticereportfiles
 * @property Collection|MuinasCitizendivenoticereportimage[] $muinas_citizendivenoticereportimages
 * @property Collection|MuinasCompensationapplicationfile[] $muinas_compensationapplicationfiles
 * @property Collection|MuinasDiveapplicationrequestadditionaltrainingfile[] $muinas_diveapplicationrequestadditionaltrainingfiles
 * @property Collection|MuinasDiveapplicationrequesttrainingfile[] $muinas_diveapplicationrequesttrainingfiles
 * @property Collection|MuinasEvmbuildingfile[] $muinas_evmbuildingfiles
 * @property Collection|MuinasFindacceptact[] $muinas_findacceptacts
 * @property Collection|MuinasFindacceptactfindimage[] $muinas_findacceptactfindimages
 * @property Collection|MuinasFindacceptactmapplace[] $muinas_findacceptactmapplaces
 * @property Collection|MuinasGrantapplication[] $muinas_grantapplications
 * @property Collection|MuinasGrantapplicationcontractfile[] $muinas_grantapplicationcontractfiles
 * @property Collection|MuinasGrantapplicationextrafileComment[] $muinas_grantapplicationextrafile_comments
 * @property Collection|MuinasGrantapplicationextrafileSubmission[] $muinas_grantapplicationextrafile_submissions
 * @property Collection|MuinasGrantapplicationinternalfile[] $muinas_grantapplicationinternalfiles
 * @property Collection|MuinasGrantapplicationoriginalfile[] $muinas_grantapplicationoriginalfiles
 * @property Collection|MuinasGrantapplicationreport[] $muinas_grantapplicationreports
 * @property Collection|MuinasGrantapplicationreportextrafile[] $muinas_grantapplicationreportextrafiles
 * @property Collection|MuinasGrantapplicationreportoriginalfile[] $muinas_grantapplicationreportoriginalfiles
 * @property Collection|MuinasGrantapplicationworklistfile[] $muinas_grantapplicationworklistfiles
 * @property Collection|MuinasHeritagefile[] $muinas_heritagefiles
 * @property Collection|MuinasMonumentfile[] $muinas_monumentfiles
 * @property Collection|MuinasPlaceinfoanoticeaudiofile[] $muinas_placeinfoanoticeaudiofiles
 * @property Collection|MuinasPlaceinfoaudiofile[] $muinas_placeinfoaudiofiles
 * @property Collection|MuinasPlaceinfocoordinatefile[] $muinas_placeinfocoordinatefiles
 * @property Collection|MuinasPlaceinfomapplace[] $muinas_placeinfomapplaces
 * @property Collection|MuinasPlaceinfooldcoordinatefile[] $muinas_placeinfooldcoordinatefiles
 * @property Collection|MuinasPropositionsPhaseResponseWorklistfile[] $muinas_propositions_phase_response_worklistfiles
 * @property Collection|MuinasPropositionsPhaseWorklistfile[] $muinas_propositions_phase_worklistfiles
 * @property Collection|MuinasProviso[] $muinas_provisos
 * @property Collection|MuinasProvisoCommentDraftxtrafile[] $muinas_proviso_comment_draftxtrafiles
 * @property Collection|MuinasProvisoapplication[] $muinas_provisoapplications
 * @property Collection|MuinasProvisoapplicationextrafile[] $muinas_provisoapplicationextrafiles
 * @property Collection|MuinasProvisoapplicationextrafileComment[] $muinas_provisoapplicationextrafile_comments
 * @property Collection|MuinasProvisoapplicationimage[] $muinas_provisoapplicationimages
 * @property Collection|MuinasProvisoapplicationimageComment[] $muinas_provisoapplicationimage_comments
 * @property Collection|MuinasProvisoapplicationoriginalfile[] $muinas_provisoapplicationoriginalfiles
 * @property Collection|MuinasProvisoapplicationplanfile[] $muinas_provisoapplicationplanfiles
 * @property Collection|MuinasProvisocommentextrafile[] $muinas_provisocommentextrafiles
 * @property Collection|MuinasProvisoextrafile[] $muinas_provisoextrafiles
 * @property Collection|MuinasProvisoimage[] $muinas_provisoimages
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property Collection|MuinasPypapplicationcontractfile[] $muinas_pypapplicationcontractfiles
 * @property Collection|MuinasPypapplicationcostsproposalfile[] $muinas_pypapplicationcostsproposalfiles
 * @property Collection|MuinasPypapplicationexhibitfile[] $muinas_pypapplicationexhibitfiles
 * @property Collection|MuinasPypapplicationoriginalfile[] $muinas_pypapplicationoriginalfiles
 * @property Collection|MuinasPypapplicationpartnerlistfile[] $muinas_pypapplicationpartnerlistfiles
 * @property Collection|MuinasPypapplicationreport[] $muinas_pypapplicationreports
 * @property Collection|MuinasPypapplicationreportextrafile[] $muinas_pypapplicationreportextrafiles
 * @property Collection|MuinasPypapplicationreportoriginalfile[] $muinas_pypapplicationreportoriginalfiles
 * @property Collection|MuinasPypapplicationworklistfile[] $muinas_pypapplicationworklistfiles
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchapplicationrequestadditionaltrainingfile[] $muinas_searchapplicationrequestadditionaltrainingfiles
 * @property Collection|MuinasSearchapplicationrequestextrafileComment[] $muinas_searchapplicationrequestextrafile_comments
 * @property Collection|MuinasSearchapplicationrequestfile[] $muinas_searchapplicationrequestfiles
 * @property Collection|MuinasSearchapplicationrequesttrainingfile[] $muinas_searchapplicationrequesttrainingfiles
 * @property Collection|MuinasSearchnotificationextrafileComment[] $muinas_searchnotificationextrafile_comments
 * @property Collection|MuinasSearchpermitextrafileComment[] $muinas_searchpermitextrafile_comments
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 * @property Collection|MuinasSearchreportConfirmation[] $muinas_searchreport_confirmations
 * @property Collection|MuinasSearchreportfile[] $muinas_searchreportfiles
 * @property Collection|MuinasSearchreportfind[] $muinas_searchreportfinds
 * @property Collection|MuinasSearchreportfindimage[] $muinas_searchreportfindimages
 * @property Collection|MuinasSearchreportmapplace[] $muinas_searchreportmapplaces
 * @property Collection|MuinasWorkpermit[] $muinas_workpermits
 * @property Collection|MuinasWorkpermitapplication[] $muinas_workpermitapplications
 *
 * @package App\Models
 */
class MuinasFilebank extends Model
{
	protected $table = 'muinas_filebank';
	public $timestamps = false;

	protected $casts = [
		'size' => 'int'
	];

	protected $dates = [
		'created',
		'ceased'
	];

	protected $fillable = [
		'size',
		'created',
		'ceased',
		'name',
		'mime',
		'type',
		'extradata'
	];

	public function muinas_activitylicence_specialists_comment_extrafiles()
	{
		return $this->hasMany(MuinasActivitylicenceSpecialistsCommentExtrafile::class, 'filebank');
	}

	public function muinas_authorisations()
	{
		return $this->hasMany(MuinasAuthorisation::class, 'suspendedfile');
	}

	public function muinas_authorisationfiles()
	{
		return $this->hasMany(MuinasAuthorisationfile::class, 'filebank');
	}

	public function muinas_citizendivenoticereportfiles()
	{
		return $this->hasMany(MuinasCitizendivenoticereportfile::class, 'filebank');
	}

	public function muinas_citizendivenoticereportimages()
	{
		return $this->hasMany(MuinasCitizendivenoticereportimage::class, 'filebank');
	}

	public function muinas_compensationapplicationfiles()
	{
		return $this->hasMany(MuinasCompensationapplicationfile::class, 'filebank');
	}

	public function muinas_diveapplicationrequestadditionaltrainingfiles()
	{
		return $this->hasMany(MuinasDiveapplicationrequestadditionaltrainingfile::class, 'filebank');
	}

	public function muinas_diveapplicationrequesttrainingfiles()
	{
		return $this->hasMany(MuinasDiveapplicationrequesttrainingfile::class, 'filebank');
	}

	public function muinas_evmbuildingfiles()
	{
		return $this->hasMany(MuinasEvmbuildingfile::class, 'filebank');
	}

	public function muinas_findacceptacts()
	{
		return $this->hasMany(MuinasFindacceptact::class, 'docx');
	}

	public function muinas_findacceptactfindimages()
	{
		return $this->hasMany(MuinasFindacceptactfindimage::class, 'filebank');
	}

	public function muinas_findacceptactmapplaces()
	{
		return $this->hasMany(MuinasFindacceptactmapplace::class, 'staticmapimage');
	}

	public function muinas_grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'ddoc');
	}

	public function muinas_grantapplicationcontractfiles()
	{
		return $this->hasMany(MuinasGrantapplicationcontractfile::class, 'filebank');
	}

	public function muinas_grantapplicationextrafile_comments()
	{
		return $this->hasMany(MuinasGrantapplicationextrafileComment::class, 'filebank');
	}

	public function muinas_grantapplicationextrafile_submissions()
	{
		return $this->hasMany(MuinasGrantapplicationextrafileSubmission::class, 'filebank');
	}

	public function muinas_grantapplicationinternalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationinternalfile::class, 'filebank');
	}

	public function muinas_grantapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationoriginalfile::class, 'filebank');
	}

	public function muinas_grantapplicationreports()
	{
		return $this->hasMany(MuinasGrantapplicationreport::class, 'ddoc');
	}

	public function muinas_grantapplicationreportextrafiles()
	{
		return $this->hasMany(MuinasGrantapplicationreportextrafile::class, 'filebank');
	}

	public function muinas_grantapplicationreportoriginalfiles()
	{
		return $this->hasMany(MuinasGrantapplicationreportoriginalfile::class, 'filebank');
	}

	public function muinas_grantapplicationworklistfiles()
	{
		return $this->hasMany(MuinasGrantapplicationworklistfile::class, 'filebank');
	}

	public function muinas_heritagefiles()
	{
		return $this->hasMany(MuinasHeritagefile::class, 'filebank');
	}

	public function muinas_monumentfiles()
	{
		return $this->hasMany(MuinasMonumentfile::class, 'filebank');
	}

	public function muinas_placeinfoanoticeaudiofiles()
	{
		return $this->hasMany(MuinasPlaceinfoanoticeaudiofile::class, 'filebank');
	}

	public function muinas_placeinfoaudiofiles()
	{
		return $this->hasMany(MuinasPlaceinfoaudiofile::class, 'filebank');
	}

	public function muinas_placeinfocoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfocoordinatefile::class, 'filebank');
	}

	public function muinas_placeinfomapplaces()
	{
		return $this->hasMany(MuinasPlaceinfomapplace::class, 'staticmapimage');
	}

	public function muinas_placeinfooldcoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfooldcoordinatefile::class, 'new');
	}

	public function muinas_propositions_phase_response_worklistfiles()
	{
		return $this->hasMany(MuinasPropositionsPhaseResponseWorklistfile::class, 'filebank');
	}

	public function muinas_propositions_phase_worklistfiles()
	{
		return $this->hasMany(MuinasPropositionsPhaseWorklistfile::class, 'filebank');
	}

	public function muinas_provisos()
	{
		return $this->hasMany(MuinasProviso::class, 'ddoc');
	}

	public function muinas_proviso_comment_draftxtrafiles()
	{
		return $this->hasMany(MuinasProvisoCommentDraftxtrafile::class, 'filebank');
	}

	public function muinas_provisoapplications()
	{
		return $this->hasMany(MuinasProvisoapplication::class, 'mandate');
	}

	public function muinas_provisoapplicationextrafiles()
	{
		return $this->hasMany(MuinasProvisoapplicationextrafile::class, 'filebank');
	}

	public function muinas_provisoapplicationextrafile_comments()
	{
		return $this->hasMany(MuinasProvisoapplicationextrafileComment::class, 'filebank');
	}

	public function muinas_provisoapplicationimages()
	{
		return $this->hasMany(MuinasProvisoapplicationimage::class, 'filebank');
	}

	public function muinas_provisoapplicationimage_comments()
	{
		return $this->hasMany(MuinasProvisoapplicationimageComment::class, 'filebank');
	}

	public function muinas_provisoapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasProvisoapplicationoriginalfile::class, 'filebank');
	}

	public function muinas_provisoapplicationplanfiles()
	{
		return $this->hasMany(MuinasProvisoapplicationplanfile::class, 'filebank');
	}

	public function muinas_provisocommentextrafiles()
	{
		return $this->hasMany(MuinasProvisocommentextrafile::class, 'filebank');
	}

	public function muinas_provisoextrafiles()
	{
		return $this->hasMany(MuinasProvisoextrafile::class, 'filebank');
	}

	public function muinas_provisoimages()
	{
		return $this->hasMany(MuinasProvisoimage::class, 'filebank');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'ddoc');
	}

	public function muinas_pypapplicationcontractfiles()
	{
		return $this->hasMany(MuinasPypapplicationcontractfile::class, 'filebank');
	}

	public function muinas_pypapplicationcostsproposalfiles()
	{
		return $this->hasMany(MuinasPypapplicationcostsproposalfile::class, 'filebank');
	}

	public function muinas_pypapplicationexhibitfiles()
	{
		return $this->hasMany(MuinasPypapplicationexhibitfile::class, 'filebank');
	}

	public function muinas_pypapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationoriginalfile::class, 'filebank');
	}

	public function muinas_pypapplicationpartnerlistfiles()
	{
		return $this->hasMany(MuinasPypapplicationpartnerlistfile::class, 'filebank');
	}

	public function muinas_pypapplicationreports()
	{
		return $this->hasMany(MuinasPypapplicationreport::class, 'ddoc');
	}

	public function muinas_pypapplicationreportextrafiles()
	{
		return $this->hasMany(MuinasPypapplicationreportextrafile::class, 'filebank');
	}

	public function muinas_pypapplicationreportoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationreportoriginalfile::class, 'filebank');
	}

	public function muinas_pypapplicationworklistfiles()
	{
		return $this->hasMany(MuinasPypapplicationworklistfile::class, 'filebank');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'ddoc');
	}

	public function muinas_searchapplicationrequestadditionaltrainingfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequestadditionaltrainingfile::class, 'filebank');
	}

	public function muinas_searchapplicationrequestextrafile_comments()
	{
		return $this->hasMany(MuinasSearchapplicationrequestextrafileComment::class, 'filebank');
	}

	public function muinas_searchapplicationrequestfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequestfile::class, 'filebank');
	}

	public function muinas_searchapplicationrequesttrainingfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequesttrainingfile::class, 'filebank');
	}

	public function muinas_searchnotificationextrafile_comments()
	{
		return $this->hasMany(MuinasSearchnotificationextrafileComment::class, 'filebank');
	}

	public function muinas_searchpermitextrafile_comments()
	{
		return $this->hasMany(MuinasSearchpermitextrafileComment::class, 'filebank');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'ddoc');
	}

	public function muinas_searchreport_confirmations()
	{
		return $this->hasMany(MuinasSearchreportConfirmation::class, 'bdoc');
	}

	public function muinas_searchreportfiles()
	{
		return $this->hasMany(MuinasSearchreportfile::class, 'filebank');
	}

	public function muinas_searchreportfinds()
	{
		return $this->hasMany(MuinasSearchreportfind::class, 'staticmapimage');
	}

	public function muinas_searchreportfindimages()
	{
		return $this->hasMany(MuinasSearchreportfindimage::class, 'filebank');
	}

	public function muinas_searchreportmapplaces()
	{
		return $this->hasMany(MuinasSearchreportmapplace::class, 'staticmapimage');
	}

	public function muinas_workpermits()
	{
		return $this->hasMany(MuinasWorkpermit::class, 'ddoc');
	}

	public function muinas_workpermitapplications()
	{
		return $this->hasMany(MuinasWorkpermitapplication::class, 'ddoc');
	}
}
