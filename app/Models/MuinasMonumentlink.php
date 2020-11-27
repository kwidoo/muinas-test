<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentlink
 * 
 * @property int $id
 * @property int $monument
 * @property string $link
 * @property string $title
 * @property bool|null $classified
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $type
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasPerson|null $muinas_person
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasMonumentlink extends Model
{
	protected $table = 'muinas_monumentlink';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'classified' => 'bool',
		'person' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'link',
		'title',
		'classified',
		'person',
		'created',
		'type'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'type');
	}
}
