<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemplaceinfo
 * 
 * @property int $snsitem
 * @property int $placeinfo
 *
 * @package App\Models
 */
class MuinasSnsitemplaceinfo extends Model
{
	protected $table = 'muinas_snsitemplaceinfo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'placeinfo' => 'int'
	];
}
