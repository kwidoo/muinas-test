<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfoanotice
 * 
 * @property int $id
 * @property string $reference
 * @property string $toponym
 * @property string|null $old_village
 * @property string|null $old_parish2
 * @property string|null $village
 * @property string|null $farm
 * @property string|null $other
 * @property string|null $findingnr
 * @property string|null $location
 * @property string|null $remarks
 * @property string|null $lore
 * @property string|null $gpsx
 * @property string|null $gpsy
 * @property string $security
 * @property string|null $foto
 * @property string|null $plan
 * @property Carbon $created
 * @property string $status
 * @property string|null $oldinserter
 * @property string|null $literature
 * @property string|null $findingtype
 * @property string|null $muistisingroup
 * @property string|null $dating
 * @property string|null $codability
 * @property string $muististype
 * @property string $old_county
 * @property string $old_parish
 * @property int|null $placeinfo
 * @property int|null $county
 * @property int|null $parish
 * @property int|null $inserter
 * @property bool|null $public
 * 
 * @property Collection|MuinasPlaceinfoanoticeaudiofile[] $muinas_placeinfoanoticeaudiofiles
 * @property Collection|MuinasPlaceinfoanoticeindex[] $muinas_placeinfoanoticeindices
 * @property MuinasPlaceinfoanoticereferenceindex $muinas_placeinfoanoticereferenceindex
 *
 * @package App\Models
 */
class MuinasPlaceinfoanotice extends Model
{
	protected $table = 'muinas_placeinfoanotice';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'inserter' => 'int',
		'public' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'reference',
		'toponym',
		'old_village',
		'old_parish2',
		'village',
		'farm',
		'other',
		'findingnr',
		'location',
		'remarks',
		'lore',
		'gpsx',
		'gpsy',
		'security',
		'foto',
		'plan',
		'created',
		'status',
		'oldinserter',
		'literature',
		'findingtype',
		'muistisingroup',
		'dating',
		'codability',
		'muististype',
		'old_county',
		'old_parish',
		'placeinfo',
		'county',
		'parish',
		'inserter',
		'public'
	];

	public function muinas_placeinfoanoticeaudiofiles()
	{
		return $this->hasMany(MuinasPlaceinfoanoticeaudiofile::class, 'placeinfoanotice');
	}

	public function muinas_placeinfoanoticeindices()
	{
		return $this->hasMany(MuinasPlaceinfoanoticeindex::class, 'placeinfoanotice');
	}

	public function muinas_placeinfoanoticereferenceindex()
	{
		return $this->hasOne(MuinasPlaceinfoanoticereferenceindex::class, 'placeinfoanotice');
	}
}
