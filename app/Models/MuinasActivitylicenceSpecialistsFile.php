<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceSpecialistsFile
 * 
 * @property int $activitylicence
 * @property int $filebank
 * @property string|null $type
 * @property int $person
 *
 * @package App\Models
 */
class MuinasActivitylicenceSpecialistsFile extends Model
{
	protected $table = 'muinas_activitylicence_specialists_files';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $fillable = [
		'activitylicence',
		'filebank',
		'type',
		'person'
	];
}
