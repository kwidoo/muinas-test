<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchapplicationrequestadditionaltraining
 * 
 * @property int $id
 * @property int $searchapplicationrequest
 * @property string $name
 * @property Carbon|null $date
 * @property string $provider
 * @property string $location
 * @property int|null $previous
 * 
 * @property Collection|MuinasSearchapplicationrequestadditionaltrainingfile[] $muinas_searchapplicationrequestadditionaltrainingfiles
 *
 * @package App\Models
 */
class MuinasSearchapplicationrequestadditionaltraining extends Model
{
	protected $table = 'muinas_searchapplicationrequestadditionaltraining';
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

	public function muinas_searchapplicationrequestadditionaltrainingfiles()
	{
		return $this->hasMany(MuinasSearchapplicationrequestadditionaltrainingfile::class, 'searchapplicationrequestadditionaltraining');
	}
}
