<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsprotectionresource
 * 
 * @property int $snsprotection
 * @property int $resource
 * @property string $type
 *
 * @package App\Models
 */
class MuinasSnsprotectionresource extends Model
{
	protected $table = 'muinas_snsprotectionresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsprotection' => 'int',
		'resource' => 'int'
	];
}
