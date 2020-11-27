<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportfindcoordinate
 * 
 * @property int $id
 * @property int $searchreportfind
 * @property float $lat
 * @property float $lng
 * 
 * @property MuinasSearchreportfind $muinas_searchreportfind
 *
 * @package App\Models
 */
class MuinasSearchreportfindcoordinate extends Model
{
	protected $table = 'muinas_searchreportfindcoordinate';
	public $timestamps = false;

	protected $casts = [
		'searchreportfind' => 'int',
		'lat' => 'float',
		'lng' => 'float'
	];

	protected $fillable = [
		'searchreportfind',
		'lat',
		'lng'
	];

	public function muinas_searchreportfind()
	{
		return $this->belongsTo(MuinasSearchreportfind::class, 'searchreportfind');
	}
}
