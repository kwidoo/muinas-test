<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPlaceinfooldcoordinatefile
 * 
 * @property int $placeinfo
 * @property int $filebank
 * @property int|null $new
 * @property string $title
 * @property string $function
 * @property Carbon $created
 * 
 * @property MuinasPlaceinfo $muinas_placeinfo
 * @property MuinasFilebank|null $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPlaceinfooldcoordinatefile extends Model
{
	protected $table = 'muinas_placeinfooldcoordinatefile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'placeinfo' => 'int',
		'filebank' => 'int',
		'new' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'new',
		'title',
		'function',
		'created'
	];

	public function muinas_placeinfo()
	{
		return $this->belongsTo(MuinasPlaceinfo::class, 'placeinfo');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'new');
	}
}
