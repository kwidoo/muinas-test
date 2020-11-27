<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportreissue
 * 
 * @property int $id
 * @property int $pypapplicationreport
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasPypapplicationreport $muinas_pypapplicationreport
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasPypapplicationreportreissue extends Model
{
	protected $table = 'muinas_pypapplicationreportreissue';
	public $timestamps = false;

	protected $casts = [
		'pypapplicationreport' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'pypapplicationreport',
		'issuer',
		'person',
		'date'
	];

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'pypapplicationreport');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
