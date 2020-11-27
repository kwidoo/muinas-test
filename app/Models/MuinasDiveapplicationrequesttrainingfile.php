<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasDiveapplicationrequesttrainingfile
 * 
 * @property int $diveapplicationrequesttraining
 * @property int $filebank
 * @property string $title
 * @property bool|null $type
 * 
 * @property MuinasFilebank $muinas_filebank
 * @property MuinasDiveapplicationrequesttraining $muinas_diveapplicationrequesttraining
 *
 * @package App\Models
 */
class MuinasDiveapplicationrequesttrainingfile extends Model
{
	protected $table = 'muinas_diveapplicationrequesttrainingfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'diveapplicationrequesttraining' => 'int',
		'filebank' => 'int',
		'type' => 'bool'
	];

	protected $fillable = [
		'title',
		'type'
	];

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}

	public function muinas_diveapplicationrequesttraining()
	{
		return $this->belongsTo(MuinasDiveapplicationrequesttraining::class, 'diveapplicationrequesttraining');
	}
}
