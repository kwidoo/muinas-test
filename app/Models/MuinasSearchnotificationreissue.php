<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationreissue
 * 
 * @property int $id
 * @property int $searchnotification
 * @property int|null $issuer
 * @property int|null $person
 * @property Carbon $date
 *
 * @package App\Models
 */
class MuinasSearchnotificationreissue extends Model
{
	protected $table = 'muinas_searchnotificationreissue';
	public $timestamps = false;

	protected $casts = [
		'searchnotification' => 'int',
		'issuer' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'searchnotification',
		'issuer',
		'person',
		'date'
	];
}
