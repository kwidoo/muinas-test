<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchnotificationmapplace
 * 
 * @property int $id
 * @property int $searchnotification
 * @property string|null $title
 * @property string|null $address
 * @property string|null $cadastrals
 * @property Carbon|null $date
 * @property Carbon|null $enddate
 * @property string|null $type
 * @property int|null $staticmapimage
 * @property Carbon|null $coordinatesupdated
 *
 * @package App\Models
 */
class MuinasSearchnotificationmapplace extends Model
{
	protected $table = 'muinas_searchnotificationmapplace';
	public $timestamps = false;

	protected $casts = [
		'searchnotification' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'date',
		'enddate',
		'coordinatesupdated'
	];

	protected $fillable = [
		'searchnotification',
		'title',
		'address',
		'cadastrals',
		'date',
		'enddate',
		'type',
		'staticmapimage',
		'coordinatesupdated'
	];
}
