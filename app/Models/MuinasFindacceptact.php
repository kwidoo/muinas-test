<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptact
 * 
 * @property int $id
 * @property int|null $authorisation
 * @property string|null $finderfee
 * @property string|null $ownership
 * @property string $state
 * @property Carbon $created
 * @property Carbon $modified
 * @property Carbon|null $confirmed
 * @property int|null $person
 * @property int|null $pdf
 * @property int|null $docx
 * @property int|null $ownerperson
 * @property string|null $address
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $county
 * @property int|null $parish
 * @property string|null $delivery
 * @property string|null $deliverycomment
 * @property string|null $place
 * 
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property MuinasPerson|null $muinas_person
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property Collection|MuinasFindacceptactAddress[] $muinas_findacceptact_addresses
 * @property Collection|MuinasFindacceptactAddressCoordinate[] $muinas_findacceptact_address_coordinates
 * @property Collection|MuinasFindacceptactUpdate[] $muinas_findacceptact_updates
 * @property Collection|MuinasFindacceptactfind[] $muinas_findacceptactfinds
 * @property Collection|MuinasFindacceptactmapplace[] $muinas_findacceptactmapplaces
 * @property Collection|MuinasFindacceptactstatelog[] $muinas_findacceptactstatelogs
 *
 * @package App\Models
 */
class MuinasFindacceptact extends Model
{
	protected $table = 'muinas_findacceptact';
	public $timestamps = false;

	protected $casts = [
		'authorisation' => 'int',
		'person' => 'int',
		'pdf' => 'int',
		'docx' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'confirmed'
	];

	protected $fillable = [
		'authorisation',
		'finderfee',
		'ownership',
		'state',
		'created',
		'modified',
		'confirmed',
		'person',
		'pdf',
		'docx',
		'ownerperson',
		'address',
		'email',
		'phone',
		'county',
		'parish',
		'delivery',
		'deliverycomment',
		'place'
	];

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'docx');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_findacceptact_addresses()
	{
		return $this->hasMany(MuinasFindacceptactAddress::class, 'findacceptact');
	}

	public function muinas_findacceptact_address_coordinates()
	{
		return $this->hasMany(MuinasFindacceptactAddressCoordinate::class, 'findacceptact');
	}

	public function muinas_findacceptact_updates()
	{
		return $this->hasMany(MuinasFindacceptactUpdate::class, 'findacceptact');
	}

	public function muinas_findacceptactfinds()
	{
		return $this->hasMany(MuinasFindacceptactfind::class, 'findacceptact');
	}

	public function muinas_findacceptactmapplaces()
	{
		return $this->hasMany(MuinasFindacceptactmapplace::class, 'findacceptact');
	}

	public function muinas_findacceptactstatelogs()
	{
		return $this->hasMany(MuinasFindacceptactstatelog::class, 'findacceptact');
	}
}
