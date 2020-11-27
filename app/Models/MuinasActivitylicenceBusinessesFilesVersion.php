<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceBusinessesFilesVersion
 * 
 * @property int $activitylicence
 * @property int $filebank
 * @property string|null $type
 * @property int|null $person
 *
 * @package App\Models
 */
class MuinasActivitylicenceBusinessesFilesVersion extends Model
{
	protected $table = 'muinas_activitylicence_businesses_files_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'activitylicence' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $fillable = [
		'type',
		'person'
	];
}
