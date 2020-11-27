<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestreissue
 * 
 * @property int $id
 * @property int $searchapplicationrequest
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 * 
 * @property MuinasSearchapplicationrequest $muinas_searchapplicationrequest
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestreissue extends Model
{
	protected $table = 'muinas_searchapplicationrequestreissue';
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'searchapplicationrequest',
		'issuer',
		'person',
		'date'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'searchapplicationrequest');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
