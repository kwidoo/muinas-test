<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEvmbuilding
 * 
 * @property int $id
 * @property string|null $type
 * @property string $name
 * @property int|null $evmbuildingtype
 * @property int|null $county
 * @property int|null $parish
 * @property string|null $addresstext
 * @property bool|null $autoaddress
 * @property float|null $lat
 * @property float|null $lng
 * @property string $catastralunit
 * @property int|null $address
 * @property Carbon|null $addressupdated
 * @property string|null $addressupdatedata
 * @property string|null $oldlocation
 * @property string|null $ehrcode
 * @property string|null $owner
 * @property bool|null $autoowner
 * @property Carbon|null $ownerupdated
 * @property string|null $ownerupdatedata
 * @property string|null $locationposition
 * @property string|null $purpose
 * @property string|null $builder
 * @property float|null $length
 * @property float|null $width
 * @property float|null $height
 * @property int|null $buildyear
 * @property int|null $buildyearend
 * @property string|null $buildyearcomment
 * @property string $exterior
 * @property string $interior
 * @property string $building
 * @property string $other
 * @property string $history
 * @property string $comment
 * @property string $status
 * @property bool|null $public
 * @property int|null $person
 * @property string $importkey
 * @property string $importdata
 * @property string|null $inventoryer
 * @property string|null $archive
 * 
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property MuinasAddress|null $muinas_address
 * @property MuinasClassificator|null $muinas_classificator
 * @property MuinasPerson|null $muinas_person
 * @property Collection|MuinasEvmbuildingdetail[] $muinas_evmbuildingdetails
 * @property Collection|MuinasEvmbuildingfile[] $muinas_evmbuildingfiles
 * @property Collection|MuinasEvmbuildingimage[] $muinas_evmbuildingimages
 * @property Collection|MuinasEvmbuildinginventory[] $muinas_evmbuildinginventories
 * @property Collection|MuinasEvmbuildingmapplace[] $muinas_evmbuildingmapplaces
 * @property MuinasEvmbuildingmonument $muinas_evmbuildingmonument
 * @property Collection|MuinasEvmbuildingoldlocation[] $muinas_evmbuildingoldlocations
 * @property Collection|MuinasEvmbuildingownerperson[] $muinas_evmbuildingownerpeople
 *
 * @package App\Models
 */
class MuinasEvmbuilding extends Model
{
	protected $table = 'muinas_evmbuilding';
	public $timestamps = false;

	protected $casts = [
		'evmbuildingtype' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'autoaddress' => 'bool',
		'lat' => 'float',
		'lng' => 'float',
		'address' => 'int',
		'autoowner' => 'bool',
		'length' => 'float',
		'width' => 'float',
		'height' => 'float',
		'buildyear' => 'int',
		'buildyearend' => 'int',
		'public' => 'bool',
		'person' => 'int'
	];

	protected $dates = [
		'addressupdated',
		'ownerupdated'
	];

	protected $fillable = [
		'type',
		'name',
		'evmbuildingtype',
		'county',
		'parish',
		'addresstext',
		'autoaddress',
		'lat',
		'lng',
		'catastralunit',
		'address',
		'addressupdated',
		'addressupdatedata',
		'oldlocation',
		'ehrcode',
		'owner',
		'autoowner',
		'ownerupdated',
		'ownerupdatedata',
		'locationposition',
		'purpose',
		'builder',
		'length',
		'width',
		'height',
		'buildyear',
		'buildyearend',
		'buildyearcomment',
		'exterior',
		'interior',
		'building',
		'other',
		'history',
		'comment',
		'status',
		'public',
		'person',
		'importkey',
		'importdata',
		'inventoryer',
		'archive'
	];

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'evmbuildingtype');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_evmbuildingdetails()
	{
		return $this->hasMany(MuinasEvmbuildingdetail::class, 'evmbuilding');
	}

	public function muinas_evmbuildingfiles()
	{
		return $this->hasMany(MuinasEvmbuildingfile::class, 'evmbuilding');
	}

	public function muinas_evmbuildingimages()
	{
		return $this->hasMany(MuinasEvmbuildingimage::class, 'evmbuilding');
	}

	public function muinas_evmbuildinginventories()
	{
		return $this->hasMany(MuinasEvmbuildinginventory::class, 'evmbuilding');
	}

	public function muinas_evmbuildingmapplaces()
	{
		return $this->hasMany(MuinasEvmbuildingmapplace::class, 'evmbuilding');
	}

	public function muinas_evmbuildingmonument()
	{
		return $this->hasOne(MuinasEvmbuildingmonument::class, 'evmbuilding');
	}

	public function muinas_evmbuildingoldlocations()
	{
		return $this->hasMany(MuinasEvmbuildingoldlocation::class, 'evmbuilding');
	}

	public function muinas_evmbuildingownerpeople()
	{
		return $this->hasMany(MuinasEvmbuildingownerperson::class, 'evmbuilding');
	}
}
