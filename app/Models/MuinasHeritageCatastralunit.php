<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagecatastralunit
 * 
 * @property int $id
 * @property int $heritage
 * @property string $unit
 * @property Carbon $modified
 * @property string $cohesion
 * @property int $overlap
 * @property string $adsoid
 * @property Carbon|null $ownersupdated
 * @property Carbon|null $addressupdated
 * 
 * @property MuinasHeritage $muinas_heritage
 *
 * @package App\Models
 */
class MuinasHeritagecatastralunit extends Model
{
	protected $table = 'muinas_heritagecatastralunit';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int',
		'overlap' => 'int'
	];

	protected $dates = [
		'modified',
		'ownersupdated',
		'addressupdated'
	];

	protected $fillable = [
		'heritage',
		'unit',
		'modified',
		'cohesion',
		'overlap',
		'adsoid',
		'ownersupdated',
		'addressupdated'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}
}
