<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasCompensationapplicationfile
 * 
 * @property int $compensationapplication
 * @property int $filebank
 * @property string $type
 * 
 * @property MuinasCompensationapplication $muinas_compensationapplication
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasCompensationapplicationfile extends Model
{
	protected $table = 'muinas_compensationapplicationfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'compensationapplication' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'type'
	];

	public function muinas_compensationapplication()
	{
		return $this->belongsTo(MuinasCompensationapplication::class, 'compensationapplication');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
