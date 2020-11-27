<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAdsclassifier
 * 
 * @property int $id
 * @property int $parent
 * @property string $code
 * @property bool $level
 * @property string $title
 * @property string $fulltitle
 * @property Carbon $timestamp
 * @property Carbon $logstamp
 * @property string $status
 * @property string $titleen
 * @property string $labellat
 * @property string $labellng
 * 
 * @property Collection|MuinasConfidantcounty[] $muinas_confidantcounties
 * @property Collection|MuinasEvmbuilding[] $muinas_evmbuildings
 * @property Collection|MuinasFindacceptact[] $muinas_findacceptacts
 * @property Collection|MuinasGrantapplication[] $muinas_grantapplications
 * @property Collection|MuinasGrantapplicationcounty[] $muinas_grantapplicationcounties
 * @property Collection|MuinasGrantapplicationreport[] $muinas_grantapplicationreports
 * @property Collection|MuinasMuinasobjectStatisticCmState[] $muinas_muinasobject_statistic_cm_states
 * @property Collection|MuinasMuinasobjectStatisticRelation[] $muinas_muinasobject_statistic_relations
 * @property Collection|MuinasProviso[] $muinas_provisos
 * @property Collection|MuinasProvisoapplication[] $muinas_provisoapplications
 * @property Collection|MuinasProvisoapplicationcounty[] $muinas_provisoapplicationcounties
 * @property Collection|MuinasProvisocounty[] $muinas_provisocounties
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property Collection|MuinasPypapplicationSanctuary[] $muinas_pypapplication_sanctuaries
 * @property Collection|MuinasPypapplicationcounty[] $muinas_pypapplicationcounties
 * @property Collection|MuinasPypapplicationreport[] $muinas_pypapplicationreports
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 *
 * @package App\Models
 */
class MuinasAdsclassifier extends Model
{
	protected $table = 'muinas_adsclassifier';
	public $timestamps = false;

	protected $casts = [
		'parent' => 'int',
		'level' => 'bool'
	];

	protected $dates = [
		'timestamp',
		'logstamp'
	];

	protected $fillable = [
		'parent',
		'code',
		'level',
		'title',
		'fulltitle',
		'timestamp',
		'logstamp',
		'status',
		'titleen',
		'labellat',
		'labellng'
	];

	public function muinas_confidantcounties()
	{
		return $this->hasMany(MuinasConfidantcounty::class, 'county');
	}

	public function muinas_evmbuildings()
	{
		return $this->hasMany(MuinasEvmbuilding::class, 'parish');
	}

	public function muinas_findacceptacts()
	{
		return $this->hasMany(MuinasFindacceptact::class, 'parish');
	}

	public function muinas_grantapplications()
	{
		return $this->hasMany(MuinasGrantapplication::class, 'parish');
	}

	public function muinas_grantapplicationcounties()
	{
		return $this->hasMany(MuinasGrantapplicationcounty::class, 'county');
	}

	public function muinas_grantapplicationreports()
	{
		return $this->hasMany(MuinasGrantapplicationreport::class, 'parish');
	}

	public function muinas_muinasobject_statistic_cm_states()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticCmState::class, 'county');
	}

	public function muinas_muinasobject_statistic_relations()
	{
		return $this->hasMany(MuinasMuinasobjectStatisticRelation::class, 'county');
	}

	public function muinas_provisos()
	{
		return $this->hasMany(MuinasProviso::class, 'parish');
	}

	public function muinas_provisoapplications()
	{
		return $this->hasMany(MuinasProvisoapplication::class, 'parish');
	}

	public function muinas_provisoapplicationcounties()
	{
		return $this->hasMany(MuinasProvisoapplicationcounty::class, 'county');
	}

	public function muinas_provisocounties()
	{
		return $this->hasMany(MuinasProvisocounty::class, 'county');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'parish');
	}

	public function muinas_pypapplication_sanctuaries()
	{
		return $this->hasMany(MuinasPypapplicationSanctuary::class, 'county');
	}

	public function muinas_pypapplicationcounties()
	{
		return $this->hasMany(MuinasPypapplicationcounty::class, 'county');
	}

	public function muinas_pypapplicationreports()
	{
		return $this->hasMany(MuinasPypapplicationreport::class, 'parish');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'parish');
	}
}
