<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasRehemajamapplacecoordinate
 * 
 * @property int $id
 * @property int $rehemajamapplace
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasRehemajamapplace $muinas_rehemajamapplace
 *
 * @package App\Models
 */
class MuinasRehemajamapplacecoordinate extends Model
{
	protected $table = 'muinas_rehemajamapplacecoordinate';
	public $timestamps = false;

	protected $casts = [
		'rehemajamapplace' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'rehemajamapplace',
		'lat',
		'lng'
	];

	public function muinas_rehemajamapplace()
	{
		return $this->belongsTo(MuinasRehemajamapplace::class, 'rehemajamapplace');
	}
}
