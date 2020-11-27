<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasEmergencysupport
 * 
 * @property int $id
 * @property int $ownerperson
 * @property bool $opclassified
 * @property float $sum
 * @property float $eurosum
 * @property string $number
 * @property Carbon $inserted
 * @property Carbon|null $deadline
 * @property string $monumentname
 * @property string $work
 * @property string $status
 * @property int|null $grantapplication
 * @property int|null $pypapplication
 * @property int|null $compensationapplication
 * 
 * @property MuinasPypapplication|null $muinas_pypapplication
 * @property MuinasGrantapplication|null $muinas_grantapplication
 * @property MuinasOwnerperson $muinas_ownerperson
 * @property Collection|MuinasEmergencysupportmuinasobject[] $muinas_emergencysupportmuinasobjects
 *
 * @package App\Models
 */
class MuinasEmergencysupport extends Model
{
	protected $table = 'muinas_emergencysupport';
	public $timestamps = false;

	protected $casts = [
		'ownerperson' => 'int',
		'opclassified' => 'bool',
		'sum' => 'float',
		'eurosum' => 'float',
		'grantapplication' => 'int',
		'pypapplication' => 'int',
		'compensationapplication' => 'int'
	];

	protected $dates = [
		'inserted',
		'deadline'
	];

	protected $fillable = [
		'ownerperson',
		'opclassified',
		'sum',
		'eurosum',
		'number',
		'inserted',
		'deadline',
		'monumentname',
		'work',
		'status',
		'grantapplication',
		'pypapplication',
		'compensationapplication'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_ownerperson()
	{
		return $this->belongsTo(MuinasOwnerperson::class, 'ownerperson');
	}

	public function muinas_emergencysupportmuinasobjects()
	{
		return $this->hasMany(MuinasEmergencysupportmuinasobject::class, 'emergencysupport');
	}
}
