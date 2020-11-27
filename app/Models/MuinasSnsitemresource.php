<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsitemresource
 * 
 * @property int $snsitem
 * @property int $resource
 *
 * @package App\Models
 */
class MuinasSnsitemresource extends Model
{
	protected $table = 'muinas_snsitemresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsitem' => 'int',
		'resource' => 'int'
	];
}
