<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportmapplace
 * 
 * @property int $id
 * @property int $searchreport
 * @property string $title
 * @property string $address
 * @property string|null $cadastrals
 * @property Carbon|null $date
 * @property string|null $type
 * @property int|null $staticmapimage
 * @property Carbon|null $coordinatesupdated
 * @property Carbon|null $enddate
 * 
 * @property MuinasSearchreport $muinas_searchreport
 * @property MuinasFilebank|null $muinas_filebank
 * @property Collection|MuinasSearchreportmapplacecoordinate[] $muinas_searchreportmapplacecoordinates
 *
 * @package App\Models
 */
class MuinasSearchreportmapplace extends Model
{
	protected $table = 'muinas_searchreportmapplace';
	public $timestamps = false;

	protected $casts = [
		'searchreport' => 'int',
		'staticmapimage' => 'int'
	];

	protected $dates = [
		'date',
		'coordinatesupdated',
		'enddate'
	];

	protected $fillable = [
		'searchreport',
		'title',
		'address',
		'cadastrals',
		'date',
		'type',
		'staticmapimage',
		'coordinatesupdated',
		'enddate'
	];

	public function muinas_searchreport()
	{
		return $this->belongsTo(MuinasSearchreport::class, 'searchreport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'staticmapimage');
	}

	public function muinas_searchreportmapplacecoordinates()
	{
		return $this->hasMany(MuinasSearchreportmapplacecoordinate::class, 'searchreportmapplace');
	}
}
