<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemcomplex
 * 
 * @property int $snsitem
 * @property int $complex
 *
 * @package App\Models
 */
class MuinasSnsitemcomplex extends Model
{
	protected $table = 'muinas_snsitemcomplex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'complex' => 'int'
	];
}
