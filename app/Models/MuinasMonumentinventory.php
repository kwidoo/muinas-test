<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasMonumentinventory
 * 
 * @property int $id
 * @property int $monument
 * @property string $type
 * @property Carbon $created
 * @property string $inventorier
 * @property int|null $person
 * 
 * @property MuinasMonument $muinas_monument
 * @property MuinasPerson|null $muinas_person
 * @property MuinasMonumentinventorydatum $muinas_monumentinventorydatum
 *
 * @package App\Models
 */
class MuinasMonumentinventory extends Model
{
	protected $table = 'muinas_monumentinventory';
	public $timestamps = false;

	protected $casts = [
		'monument' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'monument',
		'type',
		'created',
		'inventorier',
		'person'
	];

	public function muinas_monument()
	{
		return $this->belongsTo(MuinasMonument::class, 'monument');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}

	public function muinas_monumentinventorydatum()
	{
		return $this->hasOne(MuinasMonumentinventorydatum::class, 'monumentinventory');
	}
}
