<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorkpermitworker
 * 
 * @property int $id
 * @property int $workpermit
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
class MuinasWorkpermitworker extends Model
{
	protected $table = 'muinas_workpermitworker';
	public $timestamps = false;

	protected $casts = [
		'workpermit' => 'int',
		'ownerperson' => 'int',
		'activitylicence' => 'int',
		'companyactivitylicence' => 'int'
	];

	protected $fillable = [
		'workpermit',
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
