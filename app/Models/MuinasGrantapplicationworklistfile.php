<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantapplicationworklistfile
 * 
 * @property int $grantapplication
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasGrantapplication $muinas_grantapplication
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasGrantapplicationworklistfile extends Model
{
	protected $table = 'muinas_grantapplicationworklistfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_grantapplication()
	{
		return $this->belongsTo(MuinasGrantapplication::class, 'grantapplication');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
