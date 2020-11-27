<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAddress
 * 
 * @property int $id
 * @property string $type
 * @property string $oid
 * 
 * @property Collection|MuinasApprovalmuinasobject[] $muinas_approvalmuinasobjects
 * @property Collection|MuinasArchivalmaterialmuinasobject[] $muinas_archivalmaterialmuinasobjects
 * @property Collection|MuinasAuthorisationmuinasobject[] $muinas_authorisationmuinasobjects
 * @property Collection|MuinasCompensationapplicationmuinasobject[] $muinas_compensationapplicationmuinasobjects
 * @property Collection|MuinasCoordinationmuinasobject[] $muinas_coordinationmuinasobjects
 * @property Collection|MuinasEmergencysupportmuinasobject[] $muinas_emergencysupportmuinasobjects
 * @property Collection|MuinasEvmbuilding[] $muinas_evmbuildings
 * @property Collection|MuinasFindacceptactAddress[] $muinas_findacceptact_addresses
 * @property Collection|MuinasGrantapplicationmonument[] $muinas_grantapplicationmonuments
 * @property Collection|MuinasGrantapplicationmuinasobject[] $muinas_grantapplicationmuinasobjects
 * @property Collection|MuinasHeritageAddress[] $muinas_heritage_addresses
 * @property Collection|MuinasHeritageUpdateAddressCatastarlunitAddress[] $muinas_heritage_update_address_catastarlunit_addresses
 * @property Collection|MuinasHeritageaddress[] $muinas_heritageaddresses
 * @property Collection|MuinasMonumentaddress[] $muinas_monumentaddresses
 * @property Collection|MuinasNotificationmuinasobject[] $muinas_notificationmuinasobjects
 * @property Collection|MuinasObservationprotocolmuinasobject[] $muinas_observationprotocolmuinasobjects
 * @property Collection|MuinasPhotolibrarymuinasobject[] $muinas_photolibrarymuinasobjects
 * @property Collection|MuinasPreceptmuinasobject[] $muinas_preceptmuinasobjects
 * @property Collection|MuinasProvisoapplicationmonument[] $muinas_provisoapplicationmonuments
 * @property Collection|MuinasProvisoapplicationmuinasobject[] $muinas_provisoapplicationmuinasobjects
 * @property Collection|MuinasProvisomuinasobject[] $muinas_provisomuinasobjects
 * @property Collection|MuinasPypapplicationmonument[] $muinas_pypapplicationmonuments
 * @property Collection|MuinasWargrave[] $muinas_wargraves
 *
 * @package App\Models
 */
class MuinasAddress extends Model
{
	protected $table = 'muinas_address';
	public $timestamps = false;

	protected $fillable = [
		'type',
		'oid'
	];

	public function muinas_approvalmuinasobjects()
	{
		return $this->hasMany(MuinasApprovalmuinasobject::class, 'address');
	}

	public function muinas_archivalmaterialmuinasobjects()
	{
		return $this->hasMany(MuinasArchivalmaterialmuinasobject::class, 'address');
	}

	public function muinas_authorisationmuinasobjects()
	{
		return $this->hasMany(MuinasAuthorisationmuinasobject::class, 'address');
	}

	public function muinas_compensationapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasCompensationapplicationmuinasobject::class, 'address');
	}

	public function muinas_coordinationmuinasobjects()
	{
		return $this->hasMany(MuinasCoordinationmuinasobject::class, 'address');
	}

	public function muinas_emergencysupportmuinasobjects()
	{
		return $this->hasMany(MuinasEmergencysupportmuinasobject::class, 'address');
	}

	public function muinas_evmbuildings()
	{
		return $this->hasMany(MuinasEvmbuilding::class, 'address');
	}

	public function muinas_findacceptact_addresses()
	{
		return $this->hasMany(MuinasFindacceptactAddress::class, 'address');
	}

	public function muinas_grantapplicationmonuments()
	{
		return $this->hasMany(MuinasGrantapplicationmonument::class, 'address');
	}

	public function muinas_grantapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasGrantapplicationmuinasobject::class, 'address');
	}

	public function muinas_heritage_addresses()
	{
		return $this->hasMany(MuinasHeritageAddress::class, 'address');
	}

	public function muinas_heritage_update_address_catastarlunit_addresses()
	{
		return $this->hasMany(MuinasHeritageUpdateAddressCatastarlunitAddress::class, 'address');
	}

	public function muinas_heritageaddresses()
	{
		return $this->hasMany(MuinasHeritageaddress::class, 'address');
	}

	public function muinas_monumentaddresses()
	{
		return $this->hasMany(MuinasMonumentaddress::class, 'address');
	}

	public function muinas_notificationmuinasobjects()
	{
		return $this->hasMany(MuinasNotificationmuinasobject::class, 'address');
	}

	public function muinas_observationprotocolmuinasobjects()
	{
		return $this->hasMany(MuinasObservationprotocolmuinasobject::class, 'address');
	}

	public function muinas_photolibrarymuinasobjects()
	{
		return $this->hasMany(MuinasPhotolibrarymuinasobject::class, 'address');
	}

	public function muinas_preceptmuinasobjects()
	{
		return $this->hasMany(MuinasPreceptmuinasobject::class, 'address');
	}

	public function muinas_provisoapplicationmonuments()
	{
		return $this->hasMany(MuinasProvisoapplicationmonument::class, 'address');
	}

	public function muinas_provisoapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasProvisoapplicationmuinasobject::class, 'address');
	}

	public function muinas_provisomuinasobjects()
	{
		return $this->hasMany(MuinasProvisomuinasobject::class, 'address');
	}

	public function muinas_pypapplicationmonuments()
	{
		return $this->hasMany(MuinasPypapplicationmonument::class, 'address');
	}

	public function muinas_wargraves()
	{
		return $this->hasMany(MuinasWargrave::class, 'address');
	}
}
