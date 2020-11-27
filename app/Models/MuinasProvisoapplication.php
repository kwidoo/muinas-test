<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplication
 * 
 * @property int $id
 * @property int|null $number
 * @property string $name
 * @property string $code
 * @property string|null $address
 * @property string|null $contact_person_name
 * @property string|null $contact_person_phone
 * @property string|null $contact_person_fax
 * @property string|null $contact_person_email
 * @property string|null $person_type
 * @property string|null $statedescription
 * @property string $workstartconfirm
 * @property int|null $mandate
 * @property Carbon $created
 * @property string|null $state
 * @property Carbon|null $modified
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
 * @property string|null $plandata
 * @property string $signtype
 * @property string|null $delivery
 * @property string|null $decision
 * @property string|null $reject_decision
 * @property string|null $research_decision
 * @property bool|null $researched
 * @property string|null $confirm_decision
 * @property string|null $confirm_decision_tosign
 * @property string|null $company_contact_name
 * @property string|null $company_contact_phone
 * @property string|null $company_contact_email
 * @property int|null $proviso
 * @property string|null $company_contact_code
 * @property Carbon|null $module_deadline
 * @property string|null $module_deadline_reason
 * @property int|null $module_person
 * @property string|null $module_person_reason
 * @property Carbon|null $confirm_date
 * @property Carbon|null $signed_date
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 * @property MuinasProvisoapplication|null $muinas_provisoapplication
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property Collection|MuinasProvisoapplication[] $muinas_provisoapplications
 * @property Collection|MuinasProvisoapplicationComment[] $muinas_provisoapplication_comments
 * @property Collection|MuinasProvisoapplicationcounty[] $muinas_provisoapplicationcounties
 * @property Collection|MuinasProvisoapplicationextrafile[] $muinas_provisoapplicationextrafiles
 * @property Collection|MuinasProvisoapplicationimage[] $muinas_provisoapplicationimages
 * @property Collection|MuinasProvisoapplicationmonument[] $muinas_provisoapplicationmonuments
 * @property Collection|MuinasProvisoapplicationmonumentowner[] $muinas_provisoapplicationmonumentowners
 * @property Collection|MuinasProvisoapplicationmuinasobject[] $muinas_provisoapplicationmuinasobjects
 * @property Collection|MuinasProvisoapplicationoriginalfile[] $muinas_provisoapplicationoriginalfiles
 * @property Collection|MuinasProvisoapplicationplanfile[] $muinas_provisoapplicationplanfiles
 * @property Collection|MuinasProvisoapplicationreissue[] $muinas_provisoapplicationreissues
 * @property Collection|MuinasProvisoapplicationstatedescription[] $muinas_provisoapplicationstatedescriptions
 * @property Collection|MuinasProvisoapplicationstatelog[] $muinas_provisoapplicationstatelogs
 *
 * @package App\Models
 */
class MuinasProvisoapplication extends Model
{
	protected $table = 'muinas_provisoapplication';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'mandate' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int',
		'repaired' => 'int',
		'researched' => 'bool',
		'proviso' => 'int',
		'module_person' => 'int'
	];

	protected $dates = [
		'created',
		'modified',
		'signed',
		'module_deadline',
		'confirm_date',
		'signed_date'
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
		'person_type',
		'statedescription',
		'workstartconfirm',
		'mandate',
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
		'plandata',
		'signtype',
		'delivery',
		'decision',
		'reject_decision',
		'research_decision',
		'researched',
		'confirm_decision',
		'confirm_decision_tosign',
		'company_contact_name',
		'company_contact_phone',
		'company_contact_email',
		'proviso',
		'company_contact_code',
		'module_deadline',
		'module_deadline_reason',
		'module_person',
		'module_person_reason',
		'confirm_date',
		'signed_date'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'mandate');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'repaired');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_provisoapplications()
	{
		return $this->hasMany(MuinasProvisoapplication::class, 'repaired');
	}

	public function muinas_provisoapplication_comments()
	{
		return $this->hasMany(MuinasProvisoapplicationComment::class, 'provisoapplication_id');
	}

	public function muinas_provisoapplicationcounties()
	{
		return $this->hasMany(MuinasProvisoapplicationcounty::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationextrafiles()
	{
		return $this->hasMany(MuinasProvisoapplicationextrafile::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationimages()
	{
		return $this->hasMany(MuinasProvisoapplicationimage::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationmonuments()
	{
		return $this->hasMany(MuinasProvisoapplicationmonument::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationmonumentowners()
	{
		return $this->hasMany(MuinasProvisoapplicationmonumentowner::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasProvisoapplicationmuinasobject::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationoriginalfiles()
	{
		return $this->hasMany(MuinasProvisoapplicationoriginalfile::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationplanfiles()
	{
		return $this->hasMany(MuinasProvisoapplicationplanfile::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationreissues()
	{
		return $this->hasMany(MuinasProvisoapplicationreissue::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationstatedescriptions()
	{
		return $this->hasMany(MuinasProvisoapplicationstatedescription::class, 'provisoapplication');
	}

	public function muinas_provisoapplicationstatelogs()
	{
		return $this->hasMany(MuinasProvisoapplicationstatelog::class, 'provisoapplication');
	}
}
