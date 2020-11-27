<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemfindtype
 * 
 * @property int $snsitem
 * @property int $findtype
 *
 * @package App\Models
 */
class MuinasSnsitemfindtype extends Model
{
	protected $table = 'muinas_snsitemfindtype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'findtype' => 'int'
	];
}
