<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportreissue
 * 
 * @property int $id
 * @property int $grantapplicationreport
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasGrantapplicationreport $muinas_grantapplicationreport
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportreissue extends Model
{
	protected $table = 'muinas_grantapplicationreportreissue';
	public $timestamps = false;

	protected $casts = [
		'grantapplicationreport' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'grantapplicationreport',
		'issuer',
		'person',
		'date'
	];

	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'grantapplicationreport');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
