<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactfind
 * 
 * @property int $id
 * @property int $findacceptact
 * @property string $name
 * @property int|null $type
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 * @property MuinasClassificator|null $muinas_classificator
 * @property Collection|MuinasFindacceptactfindimage[] $muinas_findacceptactfindimages
 *
 * @package App\Models
 */
class MuinasFindacceptactfind extends Model
{
	protected $table = 'muinas_findacceptactfind';
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'findacceptact',
		'name',
		'type'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}

	public function muinas_classificator()
	{
		return $this->belongsTo(MuinasClassificator::class, 'type');
	}

	public function muinas_findacceptactfindimages()
	{
		return $this->hasMany(MuinasFindacceptactfindimage::class, 'findacceptactfind');
	}
}
