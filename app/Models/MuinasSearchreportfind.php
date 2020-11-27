<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportfind
 * 
 * @property int $id
 * @property int $searchreport
 * @property int|null $staticmapimage
 * @property Carbon|null $coordinatesupdated
 * @property string $address
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasFilebank|null $muinas_filebank
 * @property Collection|MuinasSearchreportfindcoordinate[] $muinas_searchreportfindcoordinates
 * @property Collection|MuinasSearchreportfindimage[] $muinas_searchreportfindimages
 * @property Collection|MuinasSearchreportfindmetum[] $muinas_searchreportfindmeta
 *
 * @package App\Models
 */
class MuinasSearchreportfind extends Model
{
	protected $table = 'muinas_searchreportfind';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'coordinatesupdated'
	];

	protected $fillable = [
		'searchreport',
		'staticmapimage',
		'coordinatesupdated',
		'address'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'staticmapimage');
	}

	public function muinas_searchreportfindcoordinates()
	{
		return $this->hasMany(MuinasSearchreportfindcoordinate::class, 'searchreportfind');
	}

	public function muinas_searchreportfindimages()
	{
		return $this->hasMany(MuinasSearchreportfindimage::class, 'searchreportfind');
	}

	public function muinas_searchreportfindmeta()
	{
		return $this->hasMany(MuinasSearchreportfindmetum::class, 'searchreportfind');
	}
}
