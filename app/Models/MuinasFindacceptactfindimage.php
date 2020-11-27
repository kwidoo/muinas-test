<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasFindacceptactfindimage
 * 
 * @property int $findacceptactfind
 * @property int $filebank
 * @property string $title
 * @property Carbon $created
 * @property int $position
 * 
 * @property MuinasFindacceptactfind $muinas_findacceptactfind
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasFindacceptactfindimage extends Model
{
	protected $table = 'muinas_findacceptactfindimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'findacceptactfind' => 'int',
		'filebank' => 'int',
		'position' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'created',
		'position'
	];

	public function muinas_findacceptactfind()
	{
		return $this->belongsTo(MuinasFindacceptactfind::class, 'findacceptactfind');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
