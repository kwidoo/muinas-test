<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasSacrednaturalsiteuserallowed
 * 
 * @property int $pk
 * @property string $entity
 * @property int $user
 * @property bool $allowed
 * @property Carbon $datestamp
 *
 * @package App\Models
 */
class MuinasSacrednaturalsiteuserallowed extends Model
{
	protected $table = 'muinas_sacrednaturalsiteuserallowed';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pk' => 'int',
		'user' => 'int',
		'allowed' => 'bool'
	];

	protected $dates = [
		'datestamp'
	];

	protected $fillable = [
		'allowed',
		'datestamp'
	];
}
