<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticeworker
 * 
 * @property int $id
 * @property int $worknotice
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
class MuinasWorknoticeworker extends Model
{
	protected $table = 'muinas_worknoticeworker';
	public $timestamps = false;

	protected $casts = [
		'worknotice' => 'int',
		'ownerperson' => 'int',
		'activitylicence' => 'int',
		'companyactivitylicence' => 'int'
	];

	protected $fillable = [
		'worknotice',
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
