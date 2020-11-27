<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSearchreportfindimage
 * 
 * @property int $searchreportfind
 * @property int $filebank
 * @property string $title
 * @property string|null $description
 * @property Carbon $created
 * @property int|null $position
 * 
 * @property MuinasSearchreportfind $muinas_searchreportfind
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasSearchreportfindimage extends Model
{
	protected $table = 'muinas_searchreportfindimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'searchreportfind' => 'int',
		'filebank' => 'int',
		'position' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'description',
		'created',
		'position'
	];

	public function muinas_searchreportfind()
	{
		return $this->belongsTo(MuinasSearchreportfind::class, 'searchreportfind');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
