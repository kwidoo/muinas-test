<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MuinasGrantpypapplication
 * 
 * @property int $id
 * @property int|null $grantapplication
 * @property int|null $pypapplication
 * @property int|null $compensationapplication
 * @property string|null $type
 *
 * @package App\Models
 */
class MuinasGrantpypapplication extends Model
{
	protected $table = 'muinas_grantpypapplication';
	public $timestamps = false;

	protected $casts = [
		'grantapplication' => 'int',
		'pypapplication' => 'int',
		'compensationapplication' => 'int'
	];

	protected $fillable = [
		'grantapplication',
		'pypapplication',
		'compensationapplication',
		'type'
	];
}
