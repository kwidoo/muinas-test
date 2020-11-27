<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasActivitylicenceBusinessesFile
 * 
 * @property int $activitylicence
 * @property int $filebank
 * @property string|null $type
 * @property int $person
 *
 * @package App\Models
 */
class MuinasActivitylicenceBusinessesFile extends Model
{
	protected $table = 'muinas_activitylicence_businesses_files';
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
