<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequesttraining
 * 
 * @property int $id
 * @property int $searchapplicationrequest
 * @property string $name
 * @property Carbon|null $date
 * @property string $provider
 * @property string $location
 * @property int|null $previous
 * 
 * @property MuinasSearchapplicationrequest $muinas_searchapplicationrequest
 * @property Collection|MuinasSearchapplicationrequesttrainingfile[] $muinas_searchapplicationrequesttrainingfiles
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequesttraining extends Model
{
	protected $table = 'muinas_searchapplicationrequesttraining';
	public $timestamps = false;

	protected $casts = [
		'searchapplicationrequest' => 'int',
		'previous' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'searchapplicationrequest',
		'name',
		'date',
		'provider',
		'location',
		'previous'
	];

	public function muinas_searchapplicationrequest()
	{
		return $this->belongsTo(MuinasSearchapplicationrequest::class, 'searchapplicationrequest');
	}

	public function muinas_searchapplicationrequesttrainingfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequesttrainingfile::class, 'searchapplicationrequesttraining');
	}
}
