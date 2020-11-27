<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsnoticecoder
 * 
 * @property int $snsnotice
 * @property int $person
 *
 * @package App\Models
 */
class MuinasSnsnoticecoder extends Model
{
	protected $table = 'muinas_snsnoticecoder';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsnotice' => 'int',
		'person' => 'int'
	];
}
