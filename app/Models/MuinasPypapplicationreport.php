<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreport
 * 
 * @property int $id
 * @property int|null $number
 * @property string|null $contract_id
 * @property Carbon|null $contract_date
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $contact_person_name
 * @property string $contact_person_phone
 * @property string $contact_person_fax
 * @property string $contact_person_email
 * @property string $worklist
 * @property Carbon|null $work_period_start
 * @property Carbon|null $work_period_end
 * @property float|null $work_value
 * @property float|null $received_amount
 * @property float|null $self_financing_amount
 * @property float|null $co_financing_amount
 * @property float|null $refund_sum
 * @property Carbon|null $refund_date
 * @property int|null $revenueandexpenditureaccount
 * @property int|null $workreview
 * @property int|null $instrumentofdeliveryandreceipt
 * @property Carbon $created
 * @property string|null $state
 * @property Carbon $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int|null $creater
 * @property int|null $ownerperson
 * @property int|null $county
 * @property int|null $parish
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property string $signtype
 * @property string|null $adminstate
 * @property Carbon|null $submitted
 * 
 * @property MuinasFilebank|null $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 * @property MuinasOwnerperson|null $muinas_ownerperson
 * @property MuinasPypapplicationreport|null $muinas_pypapplicationreport
 * @property MuinasAdsclassifier|null $muinas_adsclassifier
 * @property Collection|MuinasPypapplication[] $muinas_pypapplications
 * @property Collection|MuinasPypapplicationreport[] $muinas_pypapplicationreports
 * @property Collection|MuinasPypapplicationreportactivitylicence[] $muinas_pypapplicationreportactivitylicences
 * @property Collection|MuinasPypapplicationreportextrafile[] $muinas_pypapplicationreportextrafiles
 * @property Collection|MuinasPypapplicationreportoriginalfile[] $muinas_pypapplicationreportoriginalfiles
 * @property Collection|MuinasPypapplicationreportreissue[] $muinas_pypapplicationreportreissues
 * @property Collection|MuinasPypapplicationreportstatelog[] $muinas_pypapplicationreportstatelogs
 *
 * @package App\Models
 */
class MuinasPypapplicationreport extends Model
{
	protected $table = 'muinas_pypapplicationreport';
	public $timestamps = false;

	protected $casts = [
		'number' => 'int',
		'work_value' => 'float',
		'received_amount' => 'float',
		'self_financing_amount' => 'float',
		'co_financing_amount' => 'float',
		'refund_sum' => 'float',
		'revenueandexpenditureaccount' => 'int',
		'workreview' => 'int',
		'instrumentofdeliveryandreceipt' => 'int',
		'pdf' => 'int',
		'ddoc' => 'int',
		'creater' => 'int',
		'ownerperson' => 'int',
		'county' => 'int',
		'parish' => 'int',
		'person' => 'int',
		'repaired' => 'int'
	];

	protected $dates = [
		'contract_date',
		'work_period_start',
		'work_period_end',
		'refund_date',
		'created',
		'modified',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'number',
		'contract_id',
		'contract_date',
		'name',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_fax',
		'contact_person_email',
		'worklist',
		'work_period_start',
		'work_period_end',
		'work_value',
		'received_amount',
		'self_financing_amount',
		'co_financing_amount',
		'refund_sum',
		'refund_date',
		'revenueandexpenditureaccount',
		'workreview',
		'instrumentofdeliveryandreceipt',
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
		'signtype',
		'adminstate',
		'submitted'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'ddoc');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'creater');
	}

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'repaired');
	}

	public function muinas_adsclassifier()
	{
		return $this->belongsTo(MuinasAdsclassifier::class, 'parish');
	}

	public function muinas_pypapplications()
	{
		return $this->hasMany(MuinasPypapplication::class, 'report');
	}

	public function muinas_pypapplicationreports()
	{
		return $this->hasMany(MuinasPypapplicationreport::class, 'repaired');
	}

	public function muinas_pypapplicationreportactivitylicences()
	{
		return $this->hasMany(MuinasPypapplicationreportactivitylicence::class, 'pypapplicationreport');
	}

	public function muinas_pypapplicationreportextrafiles()
	{
		return $this->hasMany(MuinasPypapplicationreportextrafile::class, 'pypapplicationreport');
	}

	public function muinas_pypapplicationreportoriginalfiles()
	{
		return $this->hasMany(MuinasPypapplicationreportoriginalfile::class, 'pypapplicationreport');
	}

	public function muinas_pypapplicationreportreissues()
	{
		return $this->hasMany(MuinasPypapplicationreportreissue::class, 'pypapplicationreport');
	}

	public function muinas_pypapplicationreportstatelogs()
	{
		return $this->hasMany(MuinasPypapplicationreportstatelog::class, 'pypapplicationreport');
	}
}
