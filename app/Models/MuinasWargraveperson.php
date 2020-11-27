<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWargraveperson
 * 
 * @property int $id
 * @property int $wargrave
 * @property string $forename
 * @property string $lastname
 * @property string $fathername
 * @property Carbon|null $birthdate
 * @property Carbon|null $deathdate
 * @property int|null $reburied
 * @property string $birthlocation
 * @property string $deathlocation
 * @property string $remainslocation
 * @property Carbon|null $burialdate
 * @property string $unit
 * @property Carbon $created
 * @property string $status
 * @property int|null $nationality
 * @property int|null $rank
 * @property int|null $fieldofactivity
 * @property string $remark
 * 
 * @property MuinasWargrave $muinas_wargrave
 * @property Collection|MuinasWargravepubliclog[] $muinas_wargravepubliclogs
 *
 * @package App\Models
 */
class MuinasWargraveperson extends Model
{
	protected $table = 'muinas_wargraveperson';
	public $timestamps = false;

	protected $casts = [
		'wargrave' => 'int',
		'reburied' => 'int',
		'nationality' => 'int',
		'rank' => 'int',
		'fieldofactivity' => 'int'
	];

	protected $dates = [
		'birthdate',
		'deathdate',
		'burialdate',
		'created'
	];

	protected $fillable = [
		'wargrave',
		'forename',
		'lastname',
		'fathername',
		'birthdate',
		'deathdate',
		'reburied',
		'birthlocation',
		'deathlocation',
		'remainslocation',
		'burialdate',
		'unit',
		'created',
		'status',
		'nationality',
		'rank',
		'fieldofactivity',
		'remark'
	];

	public function muinas_wargrave()
	{
		return $this->belongsTo(MuinasWargrave::class, 'wargrave');
	}

	public function muinas_wargravepubliclogs()
	{
		return $this->hasMany(MuinasWargravepubliclog::class, 'wargraveperson');
	}
}
