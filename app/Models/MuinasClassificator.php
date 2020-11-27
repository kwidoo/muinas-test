<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasClassificator
 * 
 * @property int $id
 * @property int|null $parent
 * @property int $position
 * @property string $marker
 * @property string $description
 * @property string|null $extra
 * @property string $status
 * @property int|null $oldid
 * @property string|null $oldtable
 * 
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsType[] $muinas_activitylicence_responsiblespecialists_types
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsTypesVersion[] $muinas_activitylicence_responsiblespecialists_types_versions
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsWork[] $muinas_activitylicence_responsiblespecialists_works
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsWorksVersion[] $muinas_activitylicence_responsiblespecialists_works_versions
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsWorktype[] $muinas_activitylicence_responsiblespecialists_worktypes
 * @property Collection|MuinasActivitylicenceResponsiblespecialistsWorktypesVersion[] $muinas_activitylicence_responsiblespecialists_worktypes_versions
 * @property Collection|MuinasActivitylicencetype[] $muinas_activitylicencetypes
 * @property Collection|MuinasActivitylicencetypeVersion[] $muinas_activitylicencetype_versions
 * @property Collection|MuinasActivitylicencework[] $muinas_activitylicenceworks
 * @property Collection|MuinasActivitylicenceworkVersion[] $muinas_activitylicencework_versions
 * @property Collection|MuinasActivitylicenceworktype[] $muinas_activitylicenceworktypes
 * @property Collection|MuinasActivitylicenceworktypeVersion[] $muinas_activitylicenceworktype_versions
 * @property Collection|MuinasEvmbuilding[] $muinas_evmbuildings
 * @property Collection|MuinasEvmbuildingdetail[] $muinas_evmbuildingdetails
 * @property Collection|MuinasEvmbuildingimage[] $muinas_evmbuildingimages
 * @property Collection|MuinasEvmbuildinginventory[] $muinas_evmbuildinginventories
 * @property Collection|MuinasEvmbuildingoldlocation[] $muinas_evmbuildingoldlocations
 * @property Collection|MuinasFindacceptactfind[] $muinas_findacceptactfinds
 * @property Collection|MuinasGrantapplicationcmType[] $muinas_grantapplicationcm_types
 * @property Collection|MuinasHeritage[] $muinas_heritages
 * @property Collection|MuinasHeritagecmsubtype[] $muinas_heritagecmsubtypes
 * @property Collection|MuinasHeritagedescription[] $muinas_heritagedescriptions
 * @property Collection|MuinasHeritagefile[] $muinas_heritagefiles
 * @property Collection|MuinasHeritageinspection[] $muinas_heritageinspections
 * @property Collection|MuinasHeritagelink[] $muinas_heritagelinks
 * @property Collection|MuinasMemorandum[] $muinas_memorandums
 * @property Collection|MuinasMonumentDeprotectionprocessPhase[] $muinas_monument_deprotectionprocess_phases
 * @property Collection|MuinasMonumentcmsubtype[] $muinas_monumentcmsubtypes
 * @property Collection|MuinasMonumentfile[] $muinas_monumentfiles
 * @property Collection|MuinasMonumentlink[] $muinas_monumentlinks
 * @property Collection|MuinasMuinasobjectStatisticCmState[] $muinas_muinasobject_statistic_cm_states
 * @property Collection|MuinasPlaceinfocomplex[] $muinas_placeinfocomplexes
 * @property Collection|MuinasPrecept[] $muinas_precepts
 * @property Collection|MuinasProvisoapplicationstatedescription[] $muinas_provisoapplicationstatedescriptions
 * @property Collection|MuinasRehemajamapplace[] $muinas_rehemajamapplaces
 * @property Collection|MuinasSearchreportfindmetum[] $muinas_searchreportfindmeta
 * @property Collection|MuinasWreckregistry[] $muinas_wreckregistries
 *
 * @package App\Models
 */
class MuinasClassificator extends Model
{
	protected $table = 'muinas_classificator';
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'position' => 'int',
		'oldid' => 'int'
	];

	protected $fillable = [
		'parent',
		'position',
		'marker',
		'description',
		'extra',
		'status',
		'oldid',
		'oldtable'
	];

	public function muinas_activitylicence_responsiblespecialists_types()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsType::class, 'type');
	}

	public function muinas_activitylicence_responsiblespecialists_types_versions()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsTypesVersion::class, 'type');
	}

	public function muinas_activitylicence_responsiblespecialists_works()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsWork::class, 'work');
	}

	public function muinas_activitylicence_responsiblespecialists_works_versions()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsWorksVersion::class, 'work');
	}

	public function muinas_activitylicence_responsiblespecialists_worktypes()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsWorktype::class, 'worktype');
	}

	public function muinas_activitylicence_responsiblespecialists_worktypes_versions()
	{
		return $this->hasMany(MuinasActivitylicenceResponsiblespecialistsWorktypesVersion::class, 'worktype');
	}

	public function muinas_activitylicencetypes()
	{
		return $this->hasMany(MuinasActivitylicencetype::class, 'type');
	}

	public function muinas_activitylicencetype_versions()
	{
		return $this->hasMany(MuinasActivitylicencetypeVersion::class, 'type');
	}

	public function muinas_activitylicenceworks()
	{
		return $this->hasMany(MuinasActivitylicencework::class, 'work');
	}

	public function muinas_activitylicencework_versions()
	{
		return $this->hasMany(MuinasActivitylicenceworkVersion::class, 'work');
	}

	public function muinas_activitylicenceworktypes()
	{
		return $this->hasMany(MuinasActivitylicenceworktype::class, 'worktype');
	}

	public function muinas_activitylicenceworktype_versions()
	{
		return $this->hasMany(MuinasActivitylicenceworktypeVersion::class, 'worktype');
	}

	public function muinas_evmbuildings()
	{
		return $this->hasMany(MuinasEvmbuilding::class, 'evmbuildingtype');
	}

	public function muinas_evmbuildingdetails()
	{
		return $this->hasMany(MuinasEvmbuildingdetail::class, 'state');
	}

	public function muinas_evmbuildingimages()
	{
		return $this->hasMany(MuinasEvmbuildingimage::class, 'category');
	}

	public function muinas_evmbuildinginventories()
	{
		return $this->hasMany(MuinasEvmbuildinginventory::class, 'state');
	}

	public function muinas_evmbuildingoldlocations()
	{
		return $this->hasMany(MuinasEvmbuildingoldlocation::class, 'oldparish');
	}

	public function muinas_findacceptactfinds()
	{
		return $this->hasMany(MuinasFindacceptactfind::class, 'type');
	}

	public function muinas_grantapplicationcm_types()
	{
		return $this->hasMany(MuinasGrantapplicationcmType::class, 'cm_type');
	}

	public function muinas_heritages()
	{
		return $this->hasMany(MuinasHeritage::class, 'heritagetype');
	}

	public function muinas_heritagecmsubtypes()
	{
		return $this->hasMany(MuinasHeritagecmsubtype::class, 'cm_subtype');
	}

	public function muinas_heritagedescriptions()
	{
		return $this->hasMany(MuinasHeritagedescription::class, 'description_type');
	}

	public function muinas_heritagefiles()
	{
		return $this->hasMany(MuinasHeritagefile::class, 'filetype');
	}

	public function muinas_heritageinspections()
	{
		return $this->hasMany(MuinasHeritageinspection::class, 'cm_state');
	}

	public function muinas_heritagelinks()
	{
		return $this->hasMany(MuinasHeritagelink::class, 'type');
	}

	public function muinas_memorandums()
	{
		return $this->hasMany(MuinasMemorandum::class, 'cm_state');
	}

	public function muinas_monument_deprotectionprocess_phases()
	{
		return $this->hasMany(MuinasMonumentDeprotectionprocessPhase::class, 'phase');
	}

	public function muinas_monumentcmsubtypes()
	{
		return $this->hasMany(MuinasMonumentcmsubtype::class, 'cm_subtype');
	}

	public function muinas_monumentfiles()
	{
		return $this->hasMany(MuinasMonumentfile::class, 'filetype');
	}

	public function muinas_monumentlinks()
	{
		return $this->hasMany(MuinasMonumentlink::class, 'type');
	}

	public function muinas_muinasobject_statistic_cm_states()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticCmState::class, 'cm_state');
	}

	public function muinas_placeinfocomplexes()
	{
		return $this->hasMany(MuinasPlaceinfocomplex::class, 'same');
	}

	public function muinas_precepts()
	{
		return $this->hasMany(MuinasPrecept::class, 'state');
	}

	public function muinas_provisoapplicationstatedescriptions()
	{
		return $this->hasMany(MuinasProvisoapplicationstatedescription::class, 'statedescription');
	}

	public function muinas_rehemajamapplaces()
	{
		return $this->hasMany(MuinasRehemajamapplace::class, 'outbuilding');
	}

	public function muinas_searchreportfindmeta()
	{
		return $this->hasMany(MuinasSearchreportfindmetum::class, 'classifier');
	}

	public function muinas_wreckregistries()
	{
		return $this->hasMany(MuinasWreckregistry::class, 'countryoforigin');
	}
}
