<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequesttraining
 * 
 * @property int $id
 * @property int $diveapplicationrequest
 * @property string $name
 * @property Carbon|null $date
 * @property string $provider
 * @property string $location
 * @property string|null $certificate_number
 * @property int $disabled
 * @property string|null $changed_fields
 * @property int|null $repaired
 * 
 * @property Collection|MuinasDiveapplicationrequesttrainingfile[] $muinas_diveapplicationrequesttrainingfiles
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequesttraining extends Model
{
	protected $table = 'muinas_diveapplicationrequesttraining';
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int',
		'disabled' => 'int',
		'repaired' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'diveapplicationrequest',
		'name',
		'date',
		'provider',
		'location',
		'certificate_number',
		'disabled',
		'changed_fields',
		'repaired'
	];

	public function muinas_diveapplicationrequesttrainingfiles()
	{
		return $this->hasMany(MuinasDiveapplicationrequesttrainingfile::class, 'diveapplicationrequesttraining');
	}
}
