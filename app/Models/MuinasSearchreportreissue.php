<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportreissue
 * 
 * @property int $id
 * @property int $searchreport
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasSearchreportreissue extends Model
{
	protected $table = 'muinas_searchreportreissue';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'searchreport',
		'issuer',
		'person',
		'date'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
