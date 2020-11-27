<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSyseventParam
 * 
 * @property int $event
 * @property string $name
 * @property string $value
 *
 * @package App\Models
 */
class MuinasSyseventParam extends Model
{
	protected $table = 'muinas_sysevent_param';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'event' => 'int'
	];

	protected $fillable = [
		'event',
		'name',
		'value'
	];
}
