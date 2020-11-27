<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportimage
 * 
 * @property int $citizendivenoticereport
 * @property int $filebank
 * @property string $title
 * @property string|null $description
 * @property Carbon $created
 * @property int $position
 * 
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportimage extends Model
{
	protected $table = 'muinas_citizendivenoticereportimage';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
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

	public function muinas_citizendivenoticereport()
	{
		return $this->belongsTo(MuinasCitizendivenoticereport::class, 'citizendivenoticereport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
