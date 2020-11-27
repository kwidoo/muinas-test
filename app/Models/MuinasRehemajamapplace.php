<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemajamapplace
 * 
 * @property int $id
 * @property int $rehemaja
 * @property string $title
 * @property int|null $detail
 * @property int|null $outbuilding
 * @property string|null $type
 * 
 * @property MuinasRehemaja $muinas_rehemaja
 * @property MuinasClassificator|null $muinas_classificator
 * @property Collection|MuinasRehemajamapplacecoordinate[] $muinas_rehemajamapplacecoordinates
 *
 * @package App\Models
 */
class MuinasRehemajamapplace extends Model
{
	protected $table = 'muinas_rehemajamapplace';
	public $timestamps = false;

	protected $casts = [
		'rehemaja' => 'int',
		'detail' => 'int',
		'outbuilding' => 'int'
	];

	protected $fillable = [
		'rehemaja',
		'title',
		'detail',
		'outbuilding',
		'type'
	];

	public function muinas_rehemaja()
	{
		return $this->belongsTo(MuinasRehemaja::class, 'rehemaja');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'outbuilding');
	}

	public function muinas_rehemajamapplacecoordinates()
	{
		return $this->hasMany(MuinasRehemajamapplacecoordinate::class, 'rehemajamapplace');
	}
}
