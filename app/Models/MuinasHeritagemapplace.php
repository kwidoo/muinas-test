<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasHeritagemapplace
 * 
 * @property int $id
 * @property int $heritage
 * @property string $title
 * @property string|null $type
 * 
 * @property MuinasHeritage $muinas_heritage
 * @property Collection|MuinasHeritagemapplacecoordinate[] $muinas_heritagemapplacecoordinates
 *
 * @package App\Models
 */
class MuinasHeritagemapplace extends Model
{
	protected $table = 'muinas_heritagemapplace';
	public $timestamps = false;

	protected $casts = [
		'heritage' => 'int'
	];

	protected $fillable = [
		'heritage',
		'title',
		'type'
	];

	public function muinas_heritage()
	{
		return $this->belongsTo(MuinasHeritage::class, 'heritage');
	}

	public function muinas_heritagemapplacecoordinates()
	{
		return $this->hasMany(MuinasHeritagemapplacecoordinate::class, 'heritagemapplace');
	}
}
