<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplication
 * 
 * @property int $id
 * @property int|null $number
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $contact_person_name
 * @property string $contact_person_phone
 * @property string $contact_person_fax
 * @property string $contact_person_email
 * @property string $bank
 * @property string $account
 * @property string $objectname
 * @property string $worklist
 * @property string $partnerlist
 * @property float|null $total_cost
 * @property float|null $requested_amount
 * @property float|null $self_financing_amount
 * @property float|null $co_financing_amount
 * @property string|null $project_documents
 * @property int|null $mandate
 * @property int|null $managementplan
 * @property int|null $investmentplan
 * @property Carbon $created
 * @property string|null $state
 * @property Carbon $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int $creater
 * @property int|null $ownerperson
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property int|null $report
 * @property string $signtype
 * @property Carbon|null $submitted
 * @property string|null $adminstate
 * @property string|null $objectaddress
 * @property string $exhibit
 * @property string|null $coordination
 * @property string|null $ismonument
 * 
 * @property MuinasPypapplication|null $muinas_pypapplication
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property MuinasPerson|null $muinas_person
 * @property MuinasPypapplicationreport|null $muinas_pypapplicationreport
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property Collection|MuinasEmergencysupport[] $muinas_emergencysupports
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property MuinasPypapplicationSanctuary $muinas_pypapplication_sanctuary
 * @property Collection|MuinasPypapplicationcontractfile[] $muinas_pypapplicationcontractfiles
 * @property Collection|MuinasPypapplicationcoordination[] $muinas_pypapplicationcoordinations
 * @property Collection|MuinasPypapplicationcostsproposalfile[] $muinas_pypapplicationcostsproposalfiles
 * @property Collection|MuinasPypapplicationcounty[] $muinas_pypapplicationcounties
 * @property Collection|MuinasPypapplicationexhibitfile[] $muinas_pypapplicationexhibitfiles
 * @property Collection|MuinasPypapplicationmonument[] $muinas_pypapplicationmonuments
 * @property Collection|MuinasPypapplicationoriginalfile[] $muinas_pypapplicationoriginalfiles
 * @property Collection|MuinasPypapplicationpartnerlistfile[] $muinas_pypapplicationpartnerlistfiles
 * @property Collection|MuinasPypapplicationreissue[] $muinas_pypapplicationreissues
 * @property Collection|MuinasPypapplicationreportdeadline[] $muinas_pypapplicationreportdeadlines
 * @property Collection|MuinasPypapplicationstatelog[] $muinas_pypapplicationstatelogs
 * @property Collection|MuinasPypapplicationworklistfile[] $muinas_pypapplicationworklistfiles
 *
 * @package App\Models
 */
class MuinasPypapplication extends Model
{
	protected $table = 'muinas_pypapplication';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'total_cost' => 'float',
		'requested_amount' => 'float',
		'self_financing_amount' => 'float',
		'co_financing_amount' => 'float',
		'mandate' => 'int',
		'managementplan' => 'int',
		'investmentplan' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'report' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'number',
		'name',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_fax',
		'contact_person_email',
		'bank',
		'account',
		'objectname',
		'worklist',
		'partnerlist',
		'total_cost',
		'requested_amount',
		'self_financing_amount',
		'co_financing_amount',
		'project_documents',
		'mandate',
		'managementplan',
		'investmentplan',
		'created',
		'state',
		'modified',
		'pdf',
		'ddoc',
		'lang',
		'creater',
		'ownerperson',
		'county',
		'parish',
		'signed',
		'person',
		'message',
		'repaired',
		'report',
		'signtype',
		'submitted',
		'adminstate',
		'objectaddress',
		'exhibit',
		'coordination',
		'ismonument'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'repaired');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'report');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_emergencysupports()
	{
		return $this->hasMany(MuinasEmergencysupport::class, 'pypapplication');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'repaired');
	}

	public function muinas_pypapplication_sanctuary()
	{
		return $this->hasOne(MuinasPypapplicationSanctuary::class, 'pypapplication');
	}

	public function muinas_pypapplicationcontractfiles()
	{
		return $this->hasMany(MuinasPypapplicationcontractfile::class, 'pypapplication');
	}

	public function muinas_pypapplicationcoordinations()
	{
		return $this->hasMany(MuinasPypapplicationcoordination::class, 'pypapplication');
	}

	public function muinas_pypapplicationcostsproposalfiles()
	{
		return $this->hasMany(MuinasPypapplicationcostsproposalfile::class, 'pypapplication');
	}

	public function muinas_pypapplicationcounties()
	{
		return $this->hasMany(MuinasPypapplicationcounty::class, 'pypapplication');
	}

	public function muinas_pypapplicationexhibitfiles()
	{
		return $this->hasMany(MuinasPypapplicationexhibitfile::class, 'pypapplication');
	}

	public function muinas_pypapplicationmonuments()
	{
		return $this->hasMany(MuinasPypapplicationmonument::class, 'pypapplication');
	}

	public function muinas_pypapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationoriginalfile::class, 'pypapplication');
	}

	public function muinas_pypapplicationpartnerlistfiles()
	{
		return $this->hasMany(MuinasPypapplicationpartnerlistfile::class, 'pypapplication');
	}

	public function muinas_pypapplicationreissues()
	{
		return $this->hasMany(MuinasPypapplicationreissue::class, 'pypapplication');
	}

	public function muinas_pypapplicationreportdeadlines()
	{
		return $this->hasMany(MuinasPypapplicationreportdeadline::class, 'pypapplication');
	}

	public function muinas_pypapplicationstatelogs()
	{
		return $this->hasMany(MuinasPypapplicationstatelog::class, 'pypapplication');
	}

	public function muinas_pypapplicationworklistfiles()
	{
		return $this->hasMany(MuinasPypapplicationworklistfile::class, 'pypapplication');
	}
}
