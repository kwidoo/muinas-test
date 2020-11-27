<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagelink
 * 
 * @property int $id
 * @property int $heritage
 * @property string $link
 * @property string $title
 * @property bool|null $classified
 * @property int|null $person
 * @property Carbon $created
 * @property int|null $type
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson|null $muinas_person
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasHeritagelink extends Model
{
	protected $table = 'muinas_heritagelink';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'classified' => 'bool',
		'person' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'heritage',
		'link',
		'title',
		'classified',
		'person',
		'created',
		'type'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
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
