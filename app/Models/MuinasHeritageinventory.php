<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritageinventory
 * 
 * @property int $id
 * @property int $heritage
 * @property string $type
 * @property Carbon $created
 * @property string $inventorier
 * @property int $person
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property MuinasPerson $muinas_person
 * @property MuinasHeritageinventorydatum $muinas_heritageinventorydatum
 *
 * @package App\Models
 */
class MuinasHeritageinventory extends Model
{
	protected $table = 'muinas_heritageinventory';
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
		'type',
		'created',
		'inventorier',
		'person'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_heritageinventorydatum()
	{
		return $this->hasOne(MuinasHeritageinventorydatum::class, 'heritageinventory');
	}
}
