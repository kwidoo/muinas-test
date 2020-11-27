<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSysevent
 * 
 * @property int $id
 * @property Carbon $date
 * @property string $ip
 * @property string $ns
 * @property string $name
 * @property string|null $creater
 * @property string|null $site
 * @property string|null $group
 *
 * @package App\Models
 */
class MuinasSysevent extends Model
{
	protected $table = 'muinas_sysevent';
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'ip',
		'ns',
		'name',
		'creater',
		'site',
		'group'
	];
}
