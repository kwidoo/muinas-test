<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemtype
 * 
 * @property int $snsitem
 * @property int $type
 *
 * @package App\Models
 */
class MuinasSnsitemtype extends Model
{
	protected $table = 'muinas_snsitemtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'type' => 'int'
	];
}
