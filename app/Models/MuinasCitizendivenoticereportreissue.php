<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportreissue
 * 
 * @property int $id
 * @property int $citizendivenoticereport
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportreissue extends Model
{
	protected $table = 'muinas_citizendivenoticereportreissue';
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'citizendivenoticereport',
		'issuer',
		'person',
		'date'
	];

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'citizendivenoticereport');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
