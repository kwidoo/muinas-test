<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagedescription
 * 
 * @property int $id
 * @property int $heritage
 * @property string $type
 * @property int $description_type
 * @property string $description
 * @property string $materials
 * @property string $techniques
 * @property string $authorplace
 * @property string $dating
 * @property string $dimensions
 * @property string $marks
 * @property string $inscription
 * @property string $earmark
 * @property string $extradata
 * @property Carbon $created
 * @property int $person
 * @property bool|null $classified
 * 
 * @property MuinasClassificator $muinas_classificator
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasHeritagedescription extends Model
{
	protected $table = 'muinas_heritagedescription';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'description_type' => 'int',
		'person' => 'int',
		'classified' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'heritage',
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

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'description_type');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
