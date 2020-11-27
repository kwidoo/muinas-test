<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportoriginalfile
 * 
 * @property int $grantapplicationreport
 * @property int $filebank
 * @property string $title
 * @property int|null $person
 * @property Carbon $created
 * 
 * @property MuinasGrantapplicationreport $muinas_grantapplicationreport
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasPerson|null $muinas_person
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportoriginalfile extends Model
{
	protected $table = 'muinas_grantapplicationreportoriginalfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplicationreport' => 'int',
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

	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'grantapplicationreport');
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
