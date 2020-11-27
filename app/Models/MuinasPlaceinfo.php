<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfo
 * 
 * @property int $id
 * @property string $name
 * @property string $toponym
 * @property string $muistisingroup
 * @property string $groupassignment
 * @property string $safetylevel
 * @property string $old_village
 * @property string $village
 * @property string $farm
 * @property string $casefindingtype
 * @property string $accuracy
 * @property string $placeinfotype
 * @property string $dating
 * @property string $basemappage
 * @property string $placestate
 * @property string $location
 * @property string $remarks
 * @property string $gpsx
 * @property string $gpsy
 * @property string $security
 * @property string $codability
 * @property Carbon|null $coded
 * @property int|null $foto
 * @property int|null $plan
 * @property Carbon $created
 * @property string $oldcoder
 * @property string $status
 * @property int|null $coder
 * @property int $muististype
 * @property int $old_county
 * @property int $old_parish
 * @property int $county
 * @property int|null $parish
 * @property int|null $inserter
 * @property int|null $complex
 * @property string|null $catastralunit
 * @property Carbon|null $postgisfieldschanged
 * @property bool|null $public
 * 
 * @property Collection|MuinasPlaceinfoaudiofile[] $muinas_placeinfoaudiofiles
 * @property Collection|MuinasPlaceinfocomment[] $muinas_placeinfocomments
 * @property Collection|MuinasPlaceinfocoordinatefile[] $muinas_placeinfocoordinatefiles
 * @property Collection|MuinasPlaceinfoindex[] $muinas_placeinfoindices
 * @property Collection|MuinasPlaceinfolmnoticeplaceinfo[] $muinas_placeinfolmnoticeplaceinfos
 * @property MuinasPlaceinfomapindex $muinas_placeinfomapindex
 * @property Collection|MuinasPlaceinfomapindexplace[] $muinas_placeinfomapindexplaces
 * @property Collection|MuinasPlaceinfomapplace[] $muinas_placeinfomapplaces
 * @property Collection|MuinasPlaceinfooldcoordinatefile[] $muinas_placeinfooldcoordinatefiles
 * @property Collection|MuinasPlaceinfopostgisindexdatum[] $muinas_placeinfopostgisindexdata
 * @property Collection|MuinasPlaceinfopostgisindexmain[] $muinas_placeinfopostgisindexmains
 * @property MuinasPlaceinfopostgissyncqueue $muinas_placeinfopostgissyncqueue
 *
 * @package App\Models
 */
class MuinasPlaceinfo extends Model
{
	protected $table = 'muinas_placeinfo';
	public $timestamps = false;

	protected $casts = [
		'foto' => 'int',
		'plan' => 'int',
		'coder' => 'int',
		'muististype' => 'int',
		'old_county' => 'int',
		'old_parish' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'inserter' => 'int',
		'complex' => 'int',
		'public' => 'bool'
	];

	protected $dates = [
		'coded',
		'created',
		'postgisfieldschanged'
	];

	protected $fillable = [
		'name',
		'toponym',
		'muistisingroup',
		'groupassignment',
		'safetylevel',
		'old_village',
		'village',
		'farm',
		'casefindingtype',
		'accuracy',
		'placeinfotype',
		'dating',
		'basemappage',
		'placestate',
		'location',
		'remarks',
		'gpsx',
		'gpsy',
		'security',
		'codability',
		'coded',
		'foto',
		'plan',
		'created',
		'oldcoder',
		'status',
		'coder',
		'muististype',
		'old_county',
		'old_parish',
		'county',
		'parish',
		'inserter',
		'complex',
		'catastralunit',
		'postgisfieldschanged',
		'public'
	];

	public function muinas_placeinfoaudiofiles()
	{
		return $this->hasMany(MuinasPlaceinfoaudiofile::class, 'placeinfo');
	}

	public function muinas_placeinfocomments()
	{
		return $this->hasMany(MuinasPlaceinfocomment::class, 'placeinfo');
	}

	public function muinas_placeinfocoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfocoordinatefile::class, 'placeinfo');
	}

	public function muinas_placeinfoindices()
	{
		return $this->hasMany(MuinasPlaceinfoindex::class, 'placeinfo');
	}

	public function muinas_placeinfolmnoticeplaceinfos()
	{
		return $this->hasMany(MuinasPlaceinfolmnoticeplaceinfo::class, 'placeinfo');
	}

	public function muinas_placeinfomapindex()
	{
		return $this->hasOne(MuinasPlaceinfomapindex::class, 'placeinfo');
	}

	public function muinas_placeinfomapindexplaces()
	{
		return $this->hasMany(MuinasPlaceinfomapindexplace::class, 'placeinfo');
	}

	public function muinas_placeinfomapplaces()
	{
		return $this->hasMany(MuinasPlaceinfomapplace::class, 'placeinfo');
	}

	public function muinas_placeinfooldcoordinatefiles()
	{
		return $this->hasMany(MuinasPlaceinfooldcoordinatefile::class, 'placeinfo');
	}

	public function muinas_placeinfopostgisindexdata()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexdatum::class, 'placeinfo');
	}

	public function muinas_placeinfopostgisindexmains()
	{
		return $this->hasMany(MuinasPlaceinfopostgisindexmain::class, 'placeinfo');
	}

	public function muinas_placeinfopostgissyncqueue()
	{
		return $this->hasOne(MuinasPlaceinfopostgissyncqueue::class, 'placeinfo');
	}
}
