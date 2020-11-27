<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationSubmission
 * 
 * @property int $id
 * @property int|null $grantapplication_number
 * @property int|null $person_id
 * @property int|null $citizen_id
 * @property string|null $message_admin
 * @property Carbon|null $message_admin_date
 * @property string|null $message_citizen
 * @property Carbon|null $message_citizen_date
 * 
 * @property MuinasGrantapplication|null $muinas_grantapplication
 * @property Collection|MuinasGrantapplicationextrafileSubmission[] $muinas_grantapplicationextrafile_submissions
 *
 * @package App\Models
 */
class MuinasGrantapplicationSubmission extends Model
{
	protected $table = 'muinas_grantapplication_submissions';
	public $timestamps = false;

	protected $casts = [
		'grantapplication_number' => 'int',
		'person_id' => 'int',
		'citizen_id' => 'int'
	];

	protected $dates = [
		'message_admin_date',
		'message_citizen_date'
	];

	protected $fillable = [
		'grantapplication_number',
		'person_id',
		'citizen_id',
		'message_admin',
		'message_admin_date',
		'message_citizen',
		'message_citizen_date'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication_number');
	}

	public function muinas_grantapplicationextrafile_submissions()
	{
		return $this->hasMany(MuinasGrantapplicationextrafileSubmission::class, 'grantapplication_submission');
	}
}
