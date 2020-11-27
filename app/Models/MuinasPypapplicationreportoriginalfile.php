<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportoriginalfile
 * 
 * @property int $pypapplicationreport
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * 
 * @property MuinasPypapplicationreport $muinas_pypapplicationreport
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasPypapplicationreportoriginalfile extends Model
{
	protected $table = 'muinas_pypapplicationreportoriginalfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplicationreport' => 'int',
		'filebank' => 'int',
		'person' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'title',
		'person',
		'created'
	];

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'pypapplicationreport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_person()
	{
		return $this->belongsTo(MuinasPerson::class, 'person');
	}
}
