<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplication
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $address
 * @property string $contact_person_name
 * @property string $contact_person_phone
 * @property string $contact_person_email
 * @property int $work_type
 * @property string|null $worklist
 * @property string|null $work_company
 * @property Carbon $work_period_start
 * @property Carbon $work_period_end
 * @property float $work_value
 * @property float $applied_amount
 * @property float $self_financing_amount
 * @property float|null $co_financing_amount
 * @property int|null $revenueandexpenditureaccount
 * @property int|null $workreview
 * @property int|null $instrumentofdeliveryandreceipt
 * @property Carbon $created
 * @property string|null $state
 * @property Carbon|null $modified
 * @property int|null $pdf
 * @property int|null $ddoc
 * @property string $lang
 * @property int $creater
 * @property int $ownerperson
 * @property int $county
 * @property int $parish
 * @property Carbon|null $signed
 * @property int|null $person
 * @property string|null $message
 * @property int|null $repaired
 * @property string $signtype
 * @property string $adminstate
 * @property Carbon|null $submitted
 * @property string $bank
 * @property string $account
 * 
 * @property Collection|MuinasCompensationapplicationauthorisation[] $muinas_compensationapplicationauthorisations
 * @property Collection|MuinasCompensationapplicationcoordination[] $muinas_compensationapplicationcoordinations
 * @property Collection|MuinasCompensationapplicationfile[] $muinas_compensationapplicationfiles
 * @property Collection|MuinasCompensationapplicationmuinasobject[] $muinas_compensationapplicationmuinasobjects
 *
 * @package App\Models
 */
class MuinasCompensationapplication extends Model
{
	protected $table = 'muinas_compensationapplication';
	public $timestamps = false;

	protected $casts = [
		'work_type' => 'int',
		'work_value' => 'float',
		'applied_amount' => 'float',
		'self_financing_amount' => 'float',
		'co_financing_amount' => 'float',
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
		'work_period_start',
		'work_period_end',
		'created',
		'modified',
		'signed',
		'submitted'
	];

	protected $fillable = [
		'name',
		'code',
		'address',
		'contact_person_name',
		'contact_person_phone',
		'contact_person_email',
		'work_type',
		'worklist',
		'work_company',
		'work_period_start',
		'work_period_end',
		'work_value',
		'applied_amount',
		'self_financing_amount',
		'co_financing_amount',
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
		'submitted',
		'bank',
		'account'
	];

	public function muinas_compensationapplicationauthorisations()
	{
		return $this->hasMany(MuinasCompensationapplicationauthorisation::class, 'compensationapplication');
	}

	public function muinas_compensationapplicationcoordinations()
	{
		return $this->hasMany(MuinasCompensationapplicationcoordination::class, 'compensationapplication');
	}

	public function muinas_compensationapplicationfiles()
	{
		return $this->hasMany(MuinasCompensationapplicationfile::class, 'compensationapplication');
	}

	public function muinas_compensationapplicationmuinasobjects()
	{
		return $this->hasMany(MuinasCompensationapplicationmuinasobject::class, 'compensationapplication');
	}
}
