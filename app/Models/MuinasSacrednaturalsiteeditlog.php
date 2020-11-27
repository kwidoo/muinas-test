<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteeditlog
 * 
 * @property int $id
 * @property string $module
 * @property string $field
 * @property int|null $pk
 * @property int|null $person
 * @property Carbon|null $logged
 * @property string $before
 * @property string $after
 * @property string $diff
 * @property string $parentmodule
 * @property string $parentfield
 * @property int|null $parentpk
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteeditlog extends Model
{
	protected $table = 'muinas_sacrednaturalsiteeditlog';
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int',
		'person' => 'int',
		'parentpk' => 'int'
	];

	protected $dates = [
		'logged'
	];

	protected $fillable = [
		'module',
		'field',
		'pk',
		'person',
		'logged',
		'before',
		'after',
		'diff',
		'parentmodule',
		'parentfield',
		'parentpk'
	];
}
