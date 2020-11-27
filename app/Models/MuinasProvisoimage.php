<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoimage
 * 
 * @property int $proviso
 * @property int $filebank
 * @property string $title
 * @property bool|null $status
 * @property Carbon|null $created
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasProviso $muinas_proviso
 *
 * @package App\Models
 */
class MuinasProvisoimage extends Model
{
	protected $table = 'muinas_provisoimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'proviso' => 'int',
		'filebank' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'status',
		'created'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_proviso()
	{
		return $this->belongsTo(MuinasProviso::class, 'proviso');
	}
}
