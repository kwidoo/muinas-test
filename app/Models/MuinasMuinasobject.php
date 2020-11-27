<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMuinasobject
 * 
 * @property int $id
 * @property string|null $type
 * 
 * @property Collection|MuinasApprovalmuinasobject[] $muinas_approvalmuinasobjects
 * @property Collection|MuinasArchivalmaterialmuinasobject[] $muinas_archivalmaterialmuinasobjects
 * @property Collection|MuinasAuthorisationmuinasobject[] $muinas_authorisationmuinasobjects
 * @property Collection|MuinasCompensationapplicationmuinasobject[] $muinas_compensationapplicationmuinasobjects
 * @property Collection|MuinasCoordinationmuinasobject[] $muinas_coordinationmuinasobjects
 * @property Collection|MuinasEmergencysupportmuinasobject[] $muinas_emergencysupportmuinasobjects
 * @property Collection|MuinasGrantapplicationmuinasobject[] $muinas_grantapplicationmuinasobjects
 * @property Collection|MuinasMuinasobjectStatisticCmState[] $muinas_muinasobject_statistic_cm_states
 * @property Collection|MuinasMuinasobjectStatisticRelation[] $muinas_muinasobject_statistic_relations
 * @property Collection|MuinasMuinasobjectheritage[] $muinas_muinasobjectheritages
 * @property MuinasMuinasobjectmapindex $muinas_muinasobjectmapindex
 * @property Collection|MuinasMuinasobjectmonument[] $muinas_muinasobjectmonuments
 * @property Collection|MuinasNotificationmuinasobject[] $muinas_notificationmuinasobjects
 * @property Collection|MuinasObservationprotocolmuinasobject[] $muinas_observationprotocolmuinasobjects
 * @property Collection|MuinasPhotolibrarymuinasobject[] $muinas_photolibrarymuinasobjects
 * @property Collection|MuinasPreceptmuinasobject[] $muinas_preceptmuinasobjects
 * @property Collection|MuinasProvisoapplicationmuinasobject[] $muinas_provisoapplicationmuinasobjects
 * @property Collection|MuinasProvisomuinasobject[] $muinas_provisomuinasobjects
 *
 * @package App\Models
 */
class MuinasMuinasobject extends Model
{
	protected $table = 'muinas_muinasobject';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function muinas_approvalmuinasobjects()
	{
		return $this->hasMany(MuinasApprovalmuinasobject::class, 'muinasobject');
	}

	public function muinas_archivalmaterialmuinasobjects()
	{
		return $this->hasMany(MuinasArchivalmaterialmuinasobject::class, 'muinasobject');
	}

	public function muinas_authorisationmuinasobjects()
	{
		return $this->hasMany(MuinasAuthorisationmuinasobject::class, 'muinasobject');
	}

	public function muinas_compensationapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasCompensationapplicationmuinasobject::class, 'muinasobject');
	}

	public function muinas_coordinationmuinasobjects()
	{
		return $this->hasMany(MuinasCoordinationmuinasobject::class, 'muinasobject');
	}

	public function muinas_emergencysupportmuinasobjects()
	{
		return $this->hasMany(MuinasEmergencysupportmuinasobject::class, 'muinasobject');
	}

	public function muinas_grantapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasGrantapplicationmuinasobject::class, 'muinasobject');
	}

	public function muinas_muinasobject_statistic_cm_states()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticCmState::class, 'muinasobject');
	}

	public function muinas_muinasobject_statistic_relations()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticRelation::class, 'muinasobject');
	}

	public function muinas_muinasobjectheritages()
	{
		return $this->hasMany(MuinasMuinasobjectheritage::class, 'muinasobject');
	}

	public function muinas_muinasobjectmapindex()
	{
		return $this->hasOne(MuinasMuinasobjectmapindex::class, 'muinasobject');
	}

	public function muinas_muinasobjectmonuments()
	{
		return $this->hasMany(MuinasMuinasobjectmonument::class, 'muinasobject');
	}

	public function muinas_notificationmuinasobjects()
	{
		return $this->hasMany(MuinasNotificationmuinasobject::class, 'muinasobject');
	}

	public function muinas_observationprotocolmuinasobjects()
	{
		return $this->hasMany(MuinasObservationprotocolmuinasobject::class, 'muinasobject');
	}

	public function muinas_photolibrarymuinasobjects()
	{
		return $this->hasMany(MuinasPhotolibrarymuinasobject::class, 'muinasobject');
	}

	public function muinas_preceptmuinasobjects()
	{
		return $this->hasMany(MuinasPreceptmuinasobject::class, 'muinasobject');
	}

	public function muinas_provisoapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasProvisoapplicationmuinasobject::class, 'muinasobject');
	}

	public function muinas_provisomuinasobjects()
	{
		return $this->hasMany(MuinasProvisomuinasobject::class, 'muinasobject');
	}
}
