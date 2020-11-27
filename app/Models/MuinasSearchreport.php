<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreport
 * 
 * @property int $id
 * @property int|null $number
 * @property string $comment
 * @property Carbon $created
 * @property string $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string|null $lang
 * @property int|null $creater
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property string $signtype
 * @property string|null $adminstate
 * @property Carbon|null $submitted
 * @property int|null $authorisation
 * @property int $searchnotification
 * @property int|null $nosearch
 * @property string|null $editor
 * 
 * @property MuinasSearchreport|null $muinas_searchreport
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property MuinasPerson|null $muinas_person
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property MuinasSearchnotification $muinas_searchnotification
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchapplicationrequestreport[] $muinas_searchapplicationrequestreports
 * @property Collection|MuinasSearchreport[] $muinas_searchreports
 * @property Collection|MuinasSearchreportCatastralunit[] $muinas_searchreport_catastralunits
 * @property Collection|MuinasSearchreportCatastralunitCoordinate[] $muinas_searchreport_catastralunit_coordinates
 * @property Collection|MuinasSearchreportOwnerperson[] $muinas_searchreport_ownerpeople
 * @property Collection|MuinasSearchreportOwnerpersonNotice[] $muinas_searchreport_ownerperson_notices
 * @property Collection|MuinasSearchreportUpdate[] $muinas_searchreport_updates
 * @property Collection|MuinasSearchreportfile[] $muinas_searchreportfiles
 * @property Collection|MuinasSearchreportfind[] $muinas_searchreportfinds
 * @property Collection|MuinasSearchreportmapplace[] $muinas_searchreportmapplaces
 * @property Collection|MuinasSearchreportreissue[] $muinas_searchreportreissues
 * @property Collection|MuinasSearchreportstatelog[] $muinas_searchreportstatelogs
 *
 * @package App\Models
 */
class MuinasSearchreport extends Model
{
	protected $table = 'muinas_searchreport';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'authorisation' => 'int',
		'searchnotification' => 'int',
		'nosearch' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'number',
		'comment',
		'created',
		'state',
		'modified',
		'pdf',
		'ddoc',
		'lang',
		'creater',
		'signed',
		'person',
		'message',
		'repaired',
		'signtype',
		'adminstate',
		'submitted',
		'authorisation',
		'searchnotification',
		'nosearch',
		'editor'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'repaired');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'creater');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_authorisation()
	{
		return $this->belongsTo(MuinasAuthorisation::class, 'authorisation');
	}

	public function muinas_searchnotification()
	{
		return $this->belongsTo(MuinasSearchnotification::class, 'searchnotification');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'report');
	}

	public function muinas_searchapplicationrequestreports()
	{
		return $this->hasMany(MuinasSearchapplicationrequestreport::class, 'searchreport');
	}

	public function muinas_searchreports()
	{
		return $this->hasMany(MuinasSearchreport::class, 'repaired');
	}

	public function muinas_searchreport_catastralunits()
	{
		return $this->hasMany(MuinasSearchreportCatastralunit::class, 'searchreport');
	}

	public function muinas_searchreport_catastralunit_coordinates()
	{
		return $this->hasMany(MuinasSearchreportCatastralunitCoordinate::class, 'searchreport');
	}

	public function muinas_searchreport_ownerpeople()
	{
		return $this->hasMany(MuinasSearchreportOwnerperson::class, 'searchreport');
	}

	public function muinas_searchreport_ownerperson_notices()
	{
		return $this->hasMany(MuinasSearchreportOwnerpersonNotice::class, 'searchreport');
	}

	public function muinas_searchreport_updates()
	{
		return $this->hasMany(MuinasSearchreportUpdate::class, 'searchreport');
	}

	public function muinas_searchreportfiles()
	{
		return $this->hasMany(MuinasSearchreportfile::class, 'searchreport');
	}

	public function muinas_searchreportfinds()
	{
		return $this->hasMany(MuinasSearchreportfind::class, 'searchreport');
	}

	public function muinas_searchreportmapplaces()
	{
		return $this->hasMany(MuinasSearchreportmapplace::class, 'searchreport');
	}

	public function muinas_searchreportreissues()
	{
		return $this->hasMany(MuinasSearchreportreissue::class, 'searchreport');
	}

	public function muinas_searchreportstatelogs()
	{
		return $this->hasMany(MuinasSearchreportstatelog::class, 'searchreport');
	}
}
