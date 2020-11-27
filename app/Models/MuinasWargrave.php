<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargrave
 * 
 * @property int $id
 * @property string|null $groupkey
 * @property string|null $groupname
 * @property Carbon $inserted
 * @property string $name
 * @property string $locationtype
 * @property string $directivenr
 * @property Carbon|null $directivedate
 * @property string $ponaddressee
 * @property Carbon|null $pondate
 * @property string $endnr
 * @property Carbon|null $enddate
 * @property Carbon|null $term
 * @property string $comment
 * @property Carbon $created
 * @property string $status
 * @property bool|null $public
 * @property int|null $country
 * @property int|null $county
 * @property int|null $parish
 * @property string $cemetery
 * @property string $links
 * @property string $part
 * @property string $block
 * @property string $quarter
 * @property string $grave
 * @property float|null $lat
 * @property float|null $lng
 * @property string $catastralunit
 * @property int|null $address
 * @property Carbon|null $addressupdated
 * @property string|null $addressupdatedata
 * 
 * @property MuinasAddress|null $muinas_address
 * @property Collection|MuinasWargraveperson[] $muinas_wargravepeople
 * @property Collection|MuinasWargravepubliclog[] $muinas_wargravepubliclogs
 *
 * @package App\Models
 */
class MuinasWargrave extends Model
{
	protected $table = 'muinas_wargrave';
	public $timestamps = false;

	protected $casts = [
		'public' => 'bool',
		'country' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'lat' => 'float',
		'lng' => 'float',
		'address' => 'int'
	];

	protected $dates = [
		'inserted',
		'directivedate',
		'pondate',
		'enddate',
		'term',
		'created',
		'addressupdated'
	];

	protected $fillable = [
		'groupkey',
		'groupname',
		'inserted',
		'name',
		'locationtype',
		'directivenr',
		'directivedate',
		'ponaddressee',
		'pondate',
		'endnr',
		'enddate',
		'term',
		'comment',
		'created',
		'status',
		'public',
		'country',
		'county',
		'parish',
		'cemetery',
		'links',
		'part',
		'block',
		'quarter',
		'grave',
		'lat',
		'lng',
		'catastralunit',
		'address',
		'addressupdated',
		'addressupdatedata'
	];

	public function muinas_address()
	{
		return $this->belongsTo(MuinasAddress::class, 'address');
	}

	public function muinas_wargravepeople()
	{
		return $this->hasMany(MuinasWargraveperson::class, 'wargrave');
	}

	public function muinas_wargravepubliclogs()
	{
		return $this->hasMany(MuinasWargravepubliclog::class, 'wargrave');
	}
}
