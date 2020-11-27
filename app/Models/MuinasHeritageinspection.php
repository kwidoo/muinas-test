<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageinspection
 * 
 * @property int $id
 * @property int $heritage
 * @property Carbon $inspected
 * @property int $cm_state
 * @property Carbon $created
 * @property bool|null $mark
 * @property bool|null $inuse
 * @property int $person
 * @property string $description
 * @property Carbon|null $stolen
 * @property string|null $stolenaccuracy
 * @property bool|null $latest
 * 
 * @property MuinasClassificator $muinas_classificator
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson $muinas_person
 * @property Collection|MuinasHeritageinspectionimage[] $muinas_heritageinspectionimages
 *
 * @package App\Models
 */
class MuinasHeritageinspection extends Model
{
	protected $table = 'muinas_heritageinspection';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'cm_state' => 'int',
		'mark' => 'bool',
		'inuse' => 'bool',
		'person' => 'int',
		'latest' => 'bool'
	];

	protected $dates = [
		'inspected',
		'created',
		'stolen'
	];

	protected $fillable = [
		'heritage',
		'inspected',
		'cm_state',
		'created',
		'mark',
		'inuse',
		'person',
		'description',
		'stolen',
		'stolenaccuracy',
		'latest'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'cm_state');
	}

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_heritageinspectionimages()
	{
		return $this->hasMany(MuinasHeritageinspectionimage::class, 'heritageinspection');
	}
}
