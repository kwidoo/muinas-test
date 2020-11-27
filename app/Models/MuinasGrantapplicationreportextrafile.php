<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationreportextrafile
 * 
 * @property int $grantapplicationreport
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasGrantapplicationreport $muinas_grantapplicationreport
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasGrantapplicationreportextrafile extends Model
{
	protected $table = 'muinas_grantapplicationreportextrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplicationreport' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_grantapplicationreport()
	{
		return $this->belongsTo(MuinasGrantapplicationreport::class, 'grantapplicationreport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
