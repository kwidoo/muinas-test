<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonument
 * 
 * @property int $id
 * @property int|null $proposition_id
 * @property string $type
 * @property string $type2
 * @property Carbon $created
 * @property Carbon|null $registered
 * @property Carbon|null $temporaryprotectiondate
 * @property Carbon|null $archaeologicaldate
 * @property Carbon|null $naturalsacreddate
 * @property Carbon|null $deleted
 * @property string $old_reg_nr
 * @property string $archive
 * @property string $kirikud_muinas_ee
 * @property string $kirikud_name
 * @property string $cemetery_link_name
 * @property string $cemetery_link
 * @property string $protectedzone
 * @property string $status
 * @property bool|null $map
 * @property string|null $adstitle
 * @property float|null $gpsx
 * @property float|null $gpsy
 * @property float|null $lat
 * @property float|null $lng
 * @property bool|null $exportban
 * @property bool|null $isbuilding
 * @property Carbon|null $addressupdated
 * @property Carbon|null $ownerupdated
 * @property string $process_startinfo
 * @property string $protectionprocess_status
 * @property string|null $protectionprocess_comment
 * @property int|null $protectionprocess_finalize_person
 * @property Carbon|null $protectionprocess_finalize_date
 * @property bool|null $updateaddressfrommapcoordinate
 * 
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasCitizendivenoticemonument[] $muinas_citizendivenoticemonuments
 * @property MuinasEvmbuildingmonument $muinas_evmbuildingmonument
 * @property Collection|MuinasGrantapplicationmonument[] $muinas_grantapplicationmonuments
 * @property Collection|MuinasHeritageId[] $muinas_heritage_ids
 * @property Collection|MuinasMonumentDeprotectionprocessPhase[] $muinas_monument_deprotectionprocess_phases
 * @property Collection|MuinasMonumentProtectionprocessPhase[] $muinas_monument_protectionprocess_phases
 * @property Collection|MuinasMonumentUpdateHeritage[] $muinas_monument_update_heritages
 * @property Collection|MuinasMonumentaddress[] $muinas_monumentaddresses
 * @property Collection|MuinasMonumentfile[] $muinas_monumentfiles
 * @property Collection|MuinasMonumentheritage[] $muinas_monumentheritages
 * @property Collection|MuinasMonumentinventory[] $muinas_monumentinventories
 * @property Collection|MuinasMonumentlink[] $muinas_monumentlinks
 * @property Collection|MuinasMonumentlocation[] $muinas_monumentlocations
 * @property Collection|MuinasMonumentrelation[] $muinas_monumentrelations
 * @property Collection|MuinasMuinasobjectmonument[] $muinas_muinasobjectmonuments
 * @property Collection|MuinasProvisoapplicationmonument[] $muinas_provisoapplicationmonuments
 * @property Collection|MuinasPypapplicationmonument[] $muinas_pypapplicationmonuments
 *
 * @package App\Models
 */
class MuinasMonument extends Model
{
	protected $table = 'muinas_monument';
	public $timestamps = false;

	protected $casts = [
		'proposition_id' => 'int',
		'map' => 'bool',
		'gpsx' => 'float',
		'gpsy' => 'float',
		'lat' => 'float',
		'lng' => 'float',
		'exportban' => 'bool',
		'isbuilding' => 'bool',
		'protectionprocess_finalize_person' => 'int',
		'updateaddressfrommapcoordinate' => 'bool'
	];

	protected $dates = [
		'created',
		'registered',
		'temporaryprotectiondate',
		'archaeologicaldate',
		'naturalsacreddate',
		'deleted',
		'addressupdated',
		'ownerupdated',
		'protectionprocess_finalize_date'
	];

	protected $fillable = [
		'proposition_id',
		'type',
		'type2',
		'created',
		'registered',
		'temporaryprotectiondate',
		'archaeologicaldate',
		'naturalsacreddate',
		'deleted',
		'old_reg_nr',
		'archive',
		'kirikud_muinas_ee',
		'kirikud_name',
		'cemetery_link_name',
		'cemetery_link',
		'protectedzone',
		'status',
		'map',
		'adstitle',
		'gpsx',
		'gpsy',
		'lat',
		'lng',
		'exportban',
		'isbuilding',
		'addressupdated',
		'ownerupdated',
		'process_startinfo',
		'protectionprocess_status',
		'protectionprocess_comment',
		'protectionprocess_finalize_person',
		'protectionprocess_finalize_date',
		'updateaddressfrommapcoordinate'
	];

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'protectionprocess_finalize_person');
	}

	public function muinas_citizendivenoticemonuments()
	{
		return $this->hasMany(MuinasCitizendivenoticemonument::class, 'monument');
	}

	public function muinas_evmbuildingmonument()
	{
		return $this->hasOne(MuinasEvmbuildingmonument::class, 'monument');
	}

	public function muinas_grantapplicationmonuments()
	{
		return $this->hasMany(MuinasGrantapplicationmonument::class, 'monument');
	}

	public function muinas_heritage_ids()
	{
		return $this->hasMany(MuinasHeritageId::class, 'monument');
	}

	public function muinas_monument_deprotectionprocess_phases()
	{
		return $this->hasMany(MuinasMonumentDeprotectionprocessPhase::class, 'monument');
	}

	public function muinas_monument_protectionprocess_phases()
	{
		return $this->hasMany(MuinasMonumentProtectionprocessPhase::class, 'monument');
	}

	public function muinas_monument_update_heritages()
	{
		return $this->hasMany(MuinasMonumentUpdateHeritage::class, 'monument');
	}

	public function muinas_monumentaddresses()
	{
		return $this->hasMany(MuinasMonumentaddress::class, 'monument');
	}

	public function muinas_monumentfiles()
	{
		return $this->hasMany(MuinasMonumentfile::class, 'monument');
	}

	public function muinas_monumentheritages()
	{
		return $this->hasMany(MuinasMonumentheritage::class, 'monument');
	}

	public function muinas_monumentinventories()
	{
		return $this->hasMany(MuinasMonumentinventory::class, 'monument');
	}

	public function muinas_monumentlinks()
	{
		return $this->hasMany(MuinasMonumentlink::class, 'monument');
	}

	public function muinas_monumentlocations()
	{
		return $this->hasMany(MuinasMonumentlocation::class, 'monument');
	}

	public function muinas_monumentrelations()
	{
		return $this->hasMany(MuinasMonumentrelation::class, 'gvalue');
	}

	public function muinas_muinasobjectmonuments()
	{
		return $this->hasMany(MuinasMuinasobjectmonument::class, 'monument');
	}

	public function muinas_provisoapplicationmonuments()
	{
		return $this->hasMany(MuinasProvisoapplicationmonument::class, 'monument');
	}

	public function muinas_pypapplicationmonuments()
	{
		return $this->hasMany(MuinasPypapplicationmonument::class, 'monument');
	}
}
