<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritage
 * 
 * @property int $id
 * @property string|null $type
 * @property string|null $name
 * @property string|null $nameen
 * @property float|null $gpsx
 * @property float|null $gpsy
 * @property float|null $lat
 * @property float|null $lng
 * @property int|null $heritagetype
 * 
 * @property MuinasClassificator|null $muinas_classificator
 * @property Collection|MuinasHeritageAddress[] $muinas_heritage_addresses
 * @property Collection|MuinasHeritageBuilding[] $muinas_heritage_buildings
 * @property Collection|MuinasHeritageCatastralunit[] $muinas_heritage_catastralunits
 * @property Collection|MuinasHeritageId[] $muinas_heritage_ids
 * @property Collection|MuinasHeritageOwnerperson[] $muinas_heritage_ownerpeople
 * @property Collection|MuinasHeritageUpdateAddressCatastarlunitAddress[] $muinas_heritage_update_address_catastarlunit_addresses
 * @property Collection|MuinasHeritageUpdateOpCatastarlunitOp[] $muinas_heritage_update_op_catastarlunit_ops
 * @property Collection|MuinasHeritageaddress[] $muinas_heritageaddresses
 * @property Collection|MuinasHeritagealleviate[] $muinas_heritagealleviates
 * @property Collection|MuinasHeritagebuilding[] $muinas_heritagebuildings
 * @property Collection|MuinasHeritagecache[] $muinas_heritagecaches
 * @property Collection|MuinasHeritagecatastralunit[] $muinas_heritagecatastralunits
 * @property Collection|MuinasHeritagecmsubtype[] $muinas_heritagecmsubtypes
 * @property Collection|MuinasHeritagedescription[] $muinas_heritagedescriptions
 * @property Collection|MuinasHeritagefile[] $muinas_heritagefiles
 * @property Collection|MuinasHeritageimage[] $muinas_heritageimages
 * @property Collection|MuinasHeritageinspection[] $muinas_heritageinspections
 * @property Collection|MuinasHeritageinventory[] $muinas_heritageinventories
 * @property Collection|MuinasHeritagelink[] $muinas_heritagelinks
 * @property Collection|MuinasHeritagemapplace[] $muinas_heritagemapplaces
 * @property Collection|MuinasHeritageobjectmeeting[] $muinas_heritageobjectmeetings
 * @property Collection|MuinasHeritageowner[] $muinas_heritageowners
 * @property Collection|MuinasHeritageupdate[] $muinas_heritageupdates
 * @property MuinasHeritageupdatelog $muinas_heritageupdatelog
 * @property Collection|MuinasHeritageupdatequeue[] $muinas_heritageupdatequeues
 * @property Collection|MuinasMonumentUpdateHeritage[] $muinas_monument_update_heritages
 * @property Collection|MuinasMonumentheritage[] $muinas_monumentheritages
 * @property Collection|MuinasMuinasobjectheritage[] $muinas_muinasobjectheritages
 *
 * @package App\Models
 */
class MuinasHeritage extends Model
{
	protected $table = 'muinas_heritage';
	public $timestamps = false;

	protected $casts = [
		'gpsx' => 'float',
		'gpsy' => 'float',
		'lat' => 'float',
		'lng' => 'float',
		'heritagetype' => 'int'
	];

	protected $fillable = [
		'type',
		'name',
		'nameen',
		'gpsx',
		'gpsy',
		'lat',
		'lng',
		'heritagetype'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'heritagetype');
	}

	public function muinas_heritage_addresses()
	{
		return $this->hasMany(MuinasHeritageAddress::class, 'heritage');
	}

	public function muinas_heritage_buildings()
	{
		return $this->hasMany(MuinasHeritageBuilding::class, 'heritage');
	}

	public function muinas_heritage_catastralunits()
	{
		return $this->hasMany(MuinasHeritageCatastralunit::class, 'heritage');
	}

	public function muinas_heritage_ids()
	{
		return $this->hasMany(MuinasHeritageId::class, 'heritage');
	}

	public function muinas_heritage_ownerpeople()
	{
		return $this->hasMany(MuinasHeritageOwnerperson::class, 'heritage');
	}

	public function muinas_heritage_update_address_catastarlunit_addresses()
	{
		return $this->hasMany(MuinasHeritageUpdateAddressCatastarlunitAddress::class, 'heritage');
	}

	public function muinas_heritage_update_op_catastarlunit_ops()
	{
		return $this->hasMany(MuinasHeritageUpdateOpCatastarlunitOp::class, 'heritage');
	}

	public function muinas_heritageaddresses()
	{
		return $this->hasMany(MuinasHeritageaddress::class, 'heritage');
	}

	public function muinas_heritagealleviates()
	{
		return $this->hasMany(MuinasHeritagealleviate::class, 'heritage');
	}

	public function muinas_heritagebuildings()
	{
		return $this->hasMany(MuinasHeritagebuilding::class, 'heritage');
	}

	public function muinas_heritagecaches()
	{
		return $this->hasMany(MuinasHeritagecache::class, 'heritage');
	}

	public function muinas_heritagecatastralunits()
	{
		return $this->hasMany(MuinasHeritagecatastralunit::class, 'heritage');
	}

	public function muinas_heritagecmsubtypes()
	{
		return $this->hasMany(MuinasHeritagecmsubtype::class, 'heritage');
	}

	public function muinas_heritagedescriptions()
	{
		return $this->hasMany(MuinasHeritagedescription::class, 'heritage');
	}

	public function muinas_heritagefiles()
	{
		return $this->hasMany(MuinasHeritagefile::class, 'heritage');
	}

	public function muinas_heritageimages()
	{
		return $this->hasMany(MuinasHeritageimage::class, 'heritage');
	}

	public function muinas_heritageinspections()
	{
		return $this->hasMany(MuinasHeritageinspection::class, 'heritage');
	}

	public function muinas_heritageinventories()
	{
		return $this->hasMany(MuinasHeritageinventory::class, 'heritage');
	}

	public function muinas_heritagelinks()
	{
		return $this->hasMany(MuinasHeritagelink::class, 'heritage');
	}

	public function muinas_heritagemapplaces()
	{
		return $this->hasMany(MuinasHeritagemapplace::class, 'heritage');
	}

	public function muinas_heritageobjectmeetings()
	{
		return $this->hasMany(MuinasHeritageobjectmeeting::class, 'heritage');
	}

	public function muinas_heritageowners()
	{
		return $this->hasMany(MuinasHeritageowner::class, 'heritage');
	}

	public function muinas_heritageupdates()
	{
		return $this->hasMany(MuinasHeritageupdate::class, 'heritage');
	}

	public function muinas_heritageupdatelog()
	{
		return $this->hasOne(MuinasHeritageupdatelog::class, 'heritage');
	}

	public function muinas_heritageupdatequeues()
	{
		return $this->hasMany(MuinasHeritageupdatequeue::class, 'heritage');
	}

	public function muinas_monument_update_heritages()
	{
		return $this->hasMany(MuinasMonumentUpdateHeritage::class, 'heritage');
	}

	public function muinas_monumentheritages()
	{
		return $this->hasMany(MuinasMonumentheritage::class, 'heritage');
	}

	public function muinas_muinasobjectheritages()
	{
		return $this->hasMany(MuinasMuinasobjectheritage::class, 'heritage');
	}
}
