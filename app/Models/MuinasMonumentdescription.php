<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentdescription
 * 
 * @property int $id
 * @property int $monument
 * @property string $type
 * @property int|null $description_type
 * @property string $description
 * @property string $materials
 * @property string $techniques
 * @property string|null $authorplace
 * @property string|null $dating
 * @property string|null $dimensions
 * @property string|null $marks
 * @property string|null $inscription
 * @property string|null $earmark
 * @property string|null $extradata
 * @property Carbon $created
 * @property int $person
 * @property bool|null $classified
 *
 * @package App\Models
 */
class MuinasMonumentdescription extends Model
{
	protected $table = 'muinas_monumentdescription';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'description_type' => 'int',
		'person' => 'int',
		'classified' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'type',
		'description_type',
		'description',
		'materials',
		'techniques',
		'authorplace',
		'dating',
		'dimensions',
		'marks',
		'inscription',
		'earmark',
		'extradata',
		'created',
		'person',
		'classified'
	];
}
