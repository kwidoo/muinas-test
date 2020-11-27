<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequestadditionaltraining
 * 
 * @property int $id
 * @property int $diveapplicationrequest
 * @property string $name
 * @property Carbon|null $date
 * @property string $provider
 * @property string $location
 * @property string|null $certificate_number
 * @property bool|null $disabled
 * @property string|null $changed_fields
 * @property int|null $repaired
 * 
 * @property Collection|MuinasDiveapplicationrequestadditionaltrainingfile[] $muinas_diveapplicationrequestadditionaltrainingfiles
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequestadditionaltraining extends Model
{
	protected $table = 'muinas_diveapplicationrequestadditionaltraining';
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequest' => 'int',
		'disabled' => 'bool',
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

	public function muinas_diveapplicationrequestadditionaltrainingfiles()
	{
		return $this->hasMany(MuinasDiveapplicationrequestadditionaltrainingfile::class, 'diveapplicationrequestadditionaltraining');
	}
}
