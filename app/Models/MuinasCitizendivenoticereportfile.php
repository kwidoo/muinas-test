<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCitizendivenoticereportfile
 * 
 * @property int $citizendivenoticereport
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * @property string $type
 * 
 * @property MuinasCitizendivenoticereport $muinas_citizendivenoticereport
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasCitizendivenoticereportfile extends Model
{
	protected $table = 'muinas_citizendivenoticereportfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'citizendivenoticereport' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created',
		'type'
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
