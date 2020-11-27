<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasProvisoapplicationplanfile
 * 
 * @property int $provisoapplication
 * @property int $filebank
 * @property string $title
 * 
 * @property MuinasProvisoapplication $muinas_provisoapplication
 * @property MuinasFilebank $muinas_filebank
 *
 * @package App\Models
 */
class MuinasProvisoapplicationplanfile extends Model
{
	protected $table = 'muinas_provisoapplicationplanfile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'provisoapplication' => 'int',
		'filebank' => 'int'
	];

	protected $fillable = [
		'title'
	];

	public function muinas_provisoapplication()
	{
		return $this->belongsTo(MuinasProvisoapplication::class, 'provisoapplication');
	}

	public function muinas_filebank()
	{
		return $this->belongsTo(MuinasFilebank::class, 'filebank');
	}
}
