<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagealleviate
 * 
 * @property int $id
 * @property int $heritage
 * @property string $description
 * @property Carbon $created
 * @property int $person
 * @property string $type
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson $muinas_person
 *
 * @package App\Models
 */
class MuinasHeritagealleviate extends Model
{
	protected $table = 'muinas_heritagealleviate';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'heritage',
		'description',
		'created',
		'person',
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
}
