<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasPypapplicationexhibitfile
 * 
 * @property int $pypapplication
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasPypapplication $muinas_pypapplication
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasPypapplicationexhibitfile extends Model
{
	protected $table = 'muinas_pypapplicationexhibitfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pypapplication' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_pypapplication()
	{
		return $this->belongsTo(MuinasPypapplication::class, 'pypapplication');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
