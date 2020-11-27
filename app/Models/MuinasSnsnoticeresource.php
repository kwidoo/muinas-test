<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSnsnoticeresource
 * 
 * @property int $snsnotice
 * @property int $resource
 *
 * @package App\Models
 */
class MuinasSnsnoticeresource extends Model
{
	protected $table = 'muinas_snsnoticeresource';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'snsnotice' => 'int',
		'resource' => 'int'
	];
}
