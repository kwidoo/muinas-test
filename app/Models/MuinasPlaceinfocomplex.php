<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfocomplex
 * 
 * @property int $id
 * @property string $name
 * @property int|null $placeinfo
 * @property string $status
 * @property int|null $type
 * @property int|null $same
 * 
 * @property MuinasClassificator|null $muinas_classificator
 *
 * @package App\Models
 */
class MuinasPlaceinfocomplex extends Model
{
	protected $table = 'muinas_placeinfocomplex';
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'type' => 'int',
		'same' => 'int'
	];

	protected $fillable = [
		'name',
		'placeinfo',
		'status',
		'type',
		'same'
	];

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'same');
	}
}
