<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWreckregistryvideolang
 * 
 * @property int $wreckregistryvideo
 * @property string $lang
 * @property string $description
 *
 * @package App\Models
 */
class MuinasWreckregistryvideolang extends Model
{
	protected $table = 'muinas_wreckregistryvideolang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wreckregistryvideo' => 'int'
	];

	protected $fillable = [
		'description'
	];
}
