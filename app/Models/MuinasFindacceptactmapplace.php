<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactmapplace
 * 
 * @property int $id
 * @property int $findacceptact
 * @property string $name
 * @property string|null $type
 * @property int|null $staticmapimage
 * @property Carbon|null $coordinatesupdated
 * 
 * @property MuinasFindacceptact $muinas_findacceptact
 * @property MuinasFilebank|null $muinas_filebank
 * @property Collection|MuinasFindacceptactmapplacecoordinate[] $muinas_findacceptactmapplacecoordinates
 *
 * @package App\Models
 */
class MuinasFindacceptactmapplace extends Model
{
	protected $table = 'muinas_findacceptactmapplace';
	public $timestamps = false;

	protected $casts = [
		'findacceptact' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'coordinatesupdated'
	];

	protected $fillable = [
		'findacceptact',
		'name',
		'type',
		'staticmapimage',
		'coordinatesupdated'
	];

	public function muinas_findacceptact()
	{
		return $this->belongsTo(MuinasFindacceptact::class, 'findacceptact');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'staticmapimage');
	}

	public function muinas_findacceptactmapplacecoordinates()
	{
		return $this->hasMany(MuinasFindacceptactmapplacecoordinate::class, 'findacceptactmapplace');
	}
}
