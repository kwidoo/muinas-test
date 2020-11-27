<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceapplicationEhisInformation
 * 
 * @property int $id
 * @property int $activitylicenceapplication_id
 * @property string|null $personal_data
 * @property string|null $code
 * @property Carbon|null $birthdate
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $nationality
 * @property string|null $residence_permit
 * @property string|null $studies_data
 * @property string|null $level_of_education
 * @property string|null $school_name
 * @property Carbon|null $beginning_date_of_studies
 * @property Carbon|null $end_date_of_studies
 * @property string|null $code_curriculum
 * @property string|null $name_curriculum
 * @property string|null $lang_curriculum
 * @property string|null $name_of_studies
 * @property string|null $curriculum_format
 * @property Carbon|null $beginning_date_curriculum
 * @property Carbon|null $end_date_curriculum
 * @property string|null $study_load
 * @property string|null $study_duration
 * @property string|null $study_duration_unit
 * @property string|null $study_financed_by
 * @property Carbon|null $beginning_date_financed
 * @property Carbon|null $end_date_financed
 * @property string|null $reason_academic_vacation
 * @property Carbon|null $reinstatement_date
 * @property string|null $status
 * @property string|null $number_diploma
 * @property Carbon|null $created
 *
 * @package App\Models
 */
class MuinasActivitylicenceapplicationEhisInformation extends Model
{
	protected $table = 'muinas_activitylicenceapplication_ehis_information';
	public $timestamps = false;

	protected $casts = [
		'activitylicenceapplication_id' => 'int'
	];

	protected $dates = [
		'birthdate',
		'beginning_date_of_studies',
		'end_date_of_studies',
		'beginning_date_curriculum',
		'end_date_curriculum',
		'beginning_date_financed',
		'end_date_financed',
		'reinstatement_date',
		'created'
	];

	protected $fillable = [
		'activitylicenceapplication_id',
		'personal_data',
		'code',
		'birthdate',
		'name',
		'surname',
		'nationality',
		'residence_permit',
		'studies_data',
		'level_of_education',
		'school_name',
		'beginning_date_of_studies',
		'end_date_of_studies',
		'code_curriculum',
		'name_curriculum',
		'lang_curriculum',
		'name_of_studies',
		'curriculum_format',
		'beginning_date_curriculum',
		'end_date_curriculum',
		'study_load',
		'study_duration',
		'study_duration_unit',
		'study_financed_by',
		'beginning_date_financed',
		'end_date_financed',
		'reason_academic_vacation',
		'reinstatement_date',
		'status',
		'number_diploma',
		'created'
	];
}
