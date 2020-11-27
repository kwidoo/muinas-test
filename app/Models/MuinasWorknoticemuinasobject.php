<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasWorknoticemuinasobject
 * 
 * @property int $id
 * @property int $muinasobject
 * @property int|null $worknotice
 * @property int|null $address
 * @property string|null $coordinates
 *
 * @package App\Models
 */
class MuinasWorknoticemuinasobject extends Model
{
	protected $table = 'muinas_worknoticemuinasobject';
	public $timestamps = false;

	protected $casts = [
		'muinasobject' => 'int',
		'worknotice' => 'int',
		'address' => 'int'
	];

	protected $fillable = [
		'muinasobject',
		'worknotice',
		'address',
		'coordinates'
	];
}
