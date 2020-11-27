<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequest
 * 
 * @property int $id
 * @property int|null $number
 * @property string $phone
 * @property string $email
 * @property Carbon $created
 * @property string $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int $creater
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property int|null $report
 * @property string $signtype
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property int|null $authorisation
 * @property string|null $address
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $issued
 * @property Carbon|null $valid_until
 * 
 * @property MuinasSearchapplicationrequest|null $muinas_searchapplicationrequest
 * @property MuinasSearchreport|null $muinas_searchreport
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property MuinasPerson|null $muinas_person
 * @property MuinasAuthorisation|null $muinas_authorisation
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property Collection|MuinasSearchapplicationrequest[] $muinas_searchapplicationrequests
 * @property Collection|MuinasSearchapplicationrequestfile[] $muinas_searchapplicationrequestfiles
 * @property Collection|MuinasSearchapplicationrequestreissue[] $muinas_searchapplicationrequestreissues
 * @property Collection|MuinasSearchapplicationrequestreport[] $muinas_searchapplicationrequestreports
 * @property Collection|MuinasSearchapplicationrequeststatelog[] $muinas_searchapplicationrequeststatelogs
 * @property Collection|MuinasSearchapplicationrequesttraining[] $muinas_searchapplicationrequesttrainings
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequest extends Model
{
	protected $table = 'muinas_searchapplicationrequest';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'report' => 'int',
		'authorisation' => 'int',
		'county' => 'int',
		'parish' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted',
		'issued',
		'valid_until'
	];

	protected $fillable = [
		'number',
		'phone',
		'email',
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
		'report',
		'signtype',
		'submitted',
		'adminstate',
		'authorisation',
		'address',
		'county',
		'parish',
		'issued',
		'valid_until'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'repaired');
	}

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'report');
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

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_searchapplicationrequests()
	{
		return $this->hasMany(MuinasSearchapplicationrequest::class, 'repaired');
	}

	public function muinas_searchapplicationrequestfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequestfile::class, 'searchapplicationrequest');
	}

	public function muinas_searchapplicationrequestreissues()
	{
		return $this->hasMany(MuinasSearchapplicationrequestreissue::class, 'searchapplicationrequest');
	}

	public function muinas_searchapplicationrequestreports()
	{
		return $this->hasMany(MuinasSearchapplicationrequestreport::class, 'searchapplicationrequest');
	}

	public function muinas_searchapplicationrequeststatelogs()
	{
		return $this->hasMany(MuinasSearchapplicationrequeststatelog::class, 'searchapplicationrequest');
	}

	public function muinas_searchapplicationrequesttrainings()
	{
		return $this->hasMany(MuinasSearchapplicationrequesttraining::class, 'searchapplicationrequest');
	}
}
