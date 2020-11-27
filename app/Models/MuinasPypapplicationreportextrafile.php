<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationreportextrafile
 * 
 * @property int $pypapplicationreport
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasPypapplicationreport $muinas_pypapplicationreport
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPypapplicationreportextrafile extends Model
{
	protected $table = 'muinas_pypapplicationreportextrafile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplicationreport' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_pypapplicationreport()
	{
		return $this->belongsTo(MuinasPypapplicationreport::class, 'pypapplicationreport');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
