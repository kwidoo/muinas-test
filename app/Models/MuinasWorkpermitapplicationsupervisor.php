<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitapplicationsupervisor
 * 
 * @property int $id
 * @property int $workpermitapplication
 * @property string $type
 * @property string $name
 * @property string $code
 * @property string $email
 * @property string $phone
 * @property int|null $ownerperson
 * @property int|null $activitylicence
 * @property int|null $companyactivitylicence
 *
 * @package App\Models
 */
class MuinasWorkpermitapplicationsupervisor extends Model
{
	protected $table = 'muinas_workpermitapplicationsupervisor';
	public $timestamps = false;

	protected $casts = [
		'workpermitapplication' => 'int',
		'ownerperson' => 'int',
		'activitylicence' => 'int',
		'companyactivitylicence' => 'int'
	];

	protected $fillable = [
		'workpermitapplication',
		'type',
		'name',
		'code',
		'email',
		'phone',
		'ownerperson',
		'activitylicence',
		'companyactivitylicence'
	];
}
