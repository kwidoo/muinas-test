<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasAuthorisationapplicantLog
 * 
 * @property string|null $action
 * @property Carbon|null $date
 * @property int|null $authorisationapplicant_id
 * @property int|null $authorisation
 * @property int|null $applicant
 * @property string|null $type
 * @property string|null $field
 *
 * @package App\Models
 */
class MuinasAuthorisationapplicantLog extends Model
{
	protected $table = 'muinas_authorisationapplicant_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'authorisationapplicant_id' => 'int',
		'authorisation' => 'int',
		'applicant' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'action',
		'date',
		'authorisationapplicant_id',
		'authorisation',
		'applicant',
		'type',
		'field'
	];
}
